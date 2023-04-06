let myPromise = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve('Yay, I resolved!')
    }, 3000);
  });
}

// async with await keyword
async function yesAwait() {
  let value = await myPromise();
  console.log(value);
}

yesAwait();