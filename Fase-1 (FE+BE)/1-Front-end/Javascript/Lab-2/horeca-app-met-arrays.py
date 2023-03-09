# Item amount / prices
items = {
    "bolletje": {
        "price": 0.95,
        "amount": 0,
    },

    "liter": {
        "price": 9.8,
        "amount": 0
    },

    "hoorntje": {
        "price": 1.25,
        "amount": 0,
    },

    "bakje": {
        "price":  0.75,
        "amount": 0,
    },
}


# Topping amounts / prices
toppings = {    
    "geen": {
        "price": 0,
        "amount": 0
    },

    "slagroom": {
        "price":0.5,
        "amount": 0,
    },
    
    "sprinkels": {
        "price":0.3,
        "amount": 0,
    },

    "caramel_saus": {
        "hoorntje": {
            "price": 0.6,
            "amount": 0
        },

        "bakje": {
            "price": 0.9,
            "amount": 0
        },
    
        "amount": 0,
    }
}


# Get the role
def user_role():
    role_choosing = True # If the user must choose a valid answer

    roles = ("particulier", "zakelijk") # All the roles
    
    question = "Bent u " # Beginning of the question

    # Add the roles to the question
    for num, value in enumerate(roles):
        num += 1
        question += str(num) + ") " + value

        # If it is the last role
        if num == ( len(roles) - 1):
            question += " of "
        
    else:
        question += "? "

    # Loop the question if the user did not choose a valid option
    while role_choosing:
        role_num = input(question)

        try:
            role_num = int(role_num) # Check if its a number without decimal

            # Get the role with the number the user chose
            if role_num > 0 and role_num <= len(roles):
                role_num -= 1
                role = roles[role_num] 
            
                role_choosing = False # Stops the question
            
            else:
                print(error_message)

        except(ValueError, IndexError):
            print(error_message)

    else:
        return role # Return the role


# Get the amount of ice litres / scoops
def user_ice(role:str):
    ice_choosing = True # If the user must choose a valid answer

    while ice_choosing:
        # Makes / ask the question 
        option = "liter" if role == "zakelijk" else "bolletjes"
        question = f"Hoeveel {option} wilt u? "
        amount = input(question) 

        try:
            amount = int(amount) # Check if its a number without decimal
        

        except ValueError:
            print(error_message)

        else:
            if amount > 8 and role != "zakelijk":
                print("Sorry, zulke grote bakken hebben we niet")

            else:
                ice_choosing = False # Stops the question

    else:
        return amount # Return the amount


# Get the scoop
def scoop_flavours(scoops:int):
    flavours = ("Aardbei", "Chocolada", "Vanille") # Flavour options
    flavours_first = [] # First letter of the flavour
    options = "" # Flavour options in the question
    

    # Make the question which flavour the user wants
    for flavour in flavours:
        first_letter = flavour[0] # First letter of the flavour
        flavours_first.append(first_letter) # Add the first letter of the flavour to the flavours_first array
        
        options += flavour[0] + ") " + flavour 

        # If it is not the second last or the last flavour
        if flavour < flavours[-2]:
            options += ", " 
            
        # If it is the second last flavour
        elif flavour == flavours[-2]:
            options += " of "
    else:
        options += "? "


        for scoop in range(scoops):
            scoop += 1 # Add 1 to the scoop ( to make the question clearer )

            flavour_choosing = True # If the user must choose a valid answer
            
            while flavour_choosing:
                question = f"Welke smaak wilt u voor bolletje nummer {scoop}? {options}"
                scoop_flavour = input(question).upper()

                try:                     
                    flavours_first.index(scoop_flavour) # Check if the input is a valid letter

                except ValueError:
                    print(error_message)
                
                else:
                    flavour_choosing = False # Go to the next question ( if it is the last litre / scoop )


# Get the cone / bucket
def cone_choosing(scoops:int):
    cone_chososing = True # If the user must choose a valid answer

    question = f"Wilt u deze {scoops} bolletje(s) in A) een hoorntje of B) een bakje? "

    while cone_chososing:
        cone = input(question).lower()

        if cone == "a" or cone == "b":
            cone = "hoorntje" if cone == "a" else "bakje"
            cone_chososing = False # Stops the question

        else:
            print(error_message)

    else:
        return cone # Return the option the user has chosen


# Topping for all the scoops
def add_topping():
    topping_choosing = True # If the user must choose a valid answer

    topping_options = list( toppings.keys() ) # All the topping options
    options_first_char = ("a", "b", "c", "d") # The letters to choose the topping

    question = "Wat voor topping wilt u: " # Beginning of the quesiton

    # Make the question with all the topping options
    for num, topping in enumerate(topping_options):
        # Change the "_" in a topping name to a " " 
        if "_" in topping:
            topping = topping.replace("_", " ")

        option_letter = options_first_char[num].upper() # Letter to choose the topping

        question += option_letter + ") " + topping

        # If it is not the second last or the last topping
        if num < ( len(topping_options ) -2):
            question += ", "

        # If it is the second last topping
        elif num == ( len(topping_options ) -2):
            question += " of "
    else:
        question += "? "


    while topping_choosing:
        topping_letter = input(question).lower()

        try:
            index = options_first_char.index(topping_letter) # Check if the input is a valid option
            topping = topping_options[index] # Get the topping the user has chosen

        except ValueError:
            print(error_message)

        else:
            topping_choosing = False # Stops the question

    else:
        return topping # Return the topping


# Ask if the receipt must be shown
def end_page(role:str, ice:int, cone:str = None):
    receipt_choosing = True # If the user must make a choice
    buy_more = True # If the user wants to buy more or wants to see the receipt

    # Makes the question
    if role == "particulier":        
        question = f"Hier is uw {cone} met {ice} bolletje(s). Wilt u nog meer bestellen? (Y/N) "
    
    else:
        question = f"Hier is uw {ice} liter(s) ijs. Wilt u nog meer bestellen? (Y/N) "

    while receipt_choosing:
        answer = input(question).lower()

        if answer == "j":
            buy_more = True # The user can choose more items
            receipt_choosing = False # Stops the question
        
        elif answer == "n":
            buy_more = False # The user can see the receipt
            receipt_choosing = False # Stops the question

        else:
            print(error_message)

    else:
        return buy_more # Return if the user wants to show the receipt


# Add the items to the receipt
def add_items(role:str, ice:str, cone:str = None, topping:str = None):
    if role == "zakelijk":
        items['liter']['amount'] += ice # Add the amount of litres

    else:
        items['bolletje']['amount'] += ice # Add the amount of scoops
        items[cone]['amount'] += 1 
        toppings[topping]['amount'] += 1

        if topping == "caramel_saus":
            toppings[topping][cone]['amount'] += 1


# Shows the receipt
def show_receipt(role:str, business_btw:int):
    total_receipt_price = 0 # Total price for the receipt
    total_topping_amount = 0 # Total amount of all the toppings
    total_topping_price = 0 # Total price for the toppings

    print('---------["Papi Gelato"]--------- \n') # Start of the receipt
    
    if role == "zakelijk":
        litre_price = items['liter']['price']
        litre_amount = items['liter']['amount']

        litre_total_price = litre_price * litre_amount # Gets the total price of the litres

        # Makes the values 2 decimals behind the comma
        litre_price = "{:.2f}".format(litre_price)
        litre_total_price = "{:.2f}".format(litre_total_price)

        total_receipt_price = litre_total_price

        print(f"Liter         {litre_amount} x {litre_price}    = {litre_total_price}") # Shows the price for the litres
    
    else:
        # Add the items to the receipt
        for num, key in enumerate(items):       
                # If the user bought the item         
                if items[key]['amount'] != 0:
                    item = key.capitalize() # Capitalizes the first letter of the item

                    amount = items[key]['amount']
                    price = items[key]['price']

                    total_price = amount * price # Total price for the item
                    total_receipt_price += total_price # Add the total price to the receipt price

                    # Makes the values 2 decimals behind the comma
                    price = "{:.2f}".format(price)
                    total_price = "{:.2f}".format(total_price)
                
                    print(f"{item}      {amount} x {price}      = {total_price}") # Shows the price for that item

        # Add the toppings to the receipt
        for num, key in enumerate(toppings):
            # If the user bought the topping
            if toppings[key]['amount'] != 0:
                if key != "caramel_saus":
                    amount = toppings[key]['amount']
                    price = toppings[key]['price']

                    total_price = amount * price # Total price for the flavour

                    total_topping_amount += amount # Add the amount that the user bought to the total toppings amount

                    total_topping_price += total_price # Add the price to the total topping price
                    total_receipt_price += total_price # Add the price to the total receipt price

                else:
                    for key in toppings['caramel_saus']:
                        # Check the amount that the user bought for the cone / bucket
                        if key != 'amount':
                            amount = toppings['caramel_saus'][key]['amount']
                            price = toppings['caramel_saus'][key]['price']

                            total_price = amount * price

                            total_topping_amount += amount # Add the amount that the user bought to the total toppings amount

                            total_topping_price += total_price # Add the price to the total topping price
                            total_receipt_price += total_price # Add the price to the total receipt price
        
        total_receipt_price = "{:.2f}".format(total_receipt_price) # Makes the total receipt price 2 decimals behind the comma

        # If the total price for all the toppings is higher than 0
        if total_topping_price != 0:
            total_topping_price = "{:.2f}".format(total_topping_price) # Makes the total topping price 2 decimals behind the comma
    
            print(f"Topping       {total_topping_amount}             = {total_topping_price}")
    
    # Shows the total price of the receipt ( exclusive the BTW price )
    print(
        "                            ------ +",
        f"Totaal                      = {total_receipt_price}",
        sep="\n"
    )

    # Add the BTW if the role is 'zakelijk'
    if role == "zakelijk":
        btw_price = float(total_receipt_price) / 100 * business_btw # Calculates the BTW price
        btw_price = "{:.2f}".format(btw_price) # Makes the btw price 2 decimals behind the comma
        
        print(f"BTW ({business_btw}%)                    = {btw_price}") # Shows the BTW price


# When the program starts
if __name__ == "__main__":
    buy_more = True # If the user wants to buy more items
    business_btw = 6 # BTW percentage for the total price ( if the user is not a customer )
    error_message = "Sorry dat is geen optie die we aanbieden..." # Error message for a wrong input


    print("Welkom bij Papi Gelato") # Welcomes the user

    role = user_role() # Ask which role the user has

    # If the user wants to buy items
    while buy_more:
        ice = user_ice(role) # Gets the amount for the scoop / litre 

        flavour = scoop_flavours(ice) # Ask which flavour the user wants per scoop / litre

        if role != "zakelijk":
            if ice < 4:
                cone = cone_choosing(ice) # Ask the user where he wants his scoops in
            else:
                cone = "bakje"
                print(f"Dan krijgt u van mij een bakje met {ice} bolletjes")

            topping = add_topping() # Ask which topping the user wants

            add_items(role, ice, cone, topping) # Add the items the user bought
            buy_more = end_page(role, ice, cone) # Ask if the user wants to buy more items

        else:
            add_items(role, ice) # Add the items the user bought
            buy_more = end_page(role, ice) # Ask if the user wants to buy more items

    # If the user does not want to buy more items
    else:
        show_receipt(role, business_btw)