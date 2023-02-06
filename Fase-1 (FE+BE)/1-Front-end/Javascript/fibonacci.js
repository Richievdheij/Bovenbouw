function fibonacci(nummer) {
  let first = 0;
  let second = 1;
  let fib = [];

  for (let i = 0; i < nummer; i++) {
    fib.push(first);
    let next = first + second;
    first = second;
    second = next;
  }

  return fib;
}

const result = fibonacci(20);
console.log(result);
