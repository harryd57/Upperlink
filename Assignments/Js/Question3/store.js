const products = [{
  name: "shirt",
  price: 500
}, 
{
  name: 'shoe',
  price: 800
},
{
  name: 'bag',
  price: 300
},
{
  name: 'trouser',
  price: 600
}
]
function shop(){
  let search = prompt("Search for products");
  let product = products.find(item => item.name == search.toLowerCase())
  if (product){
    alert(`${product.name} has been found`)
    alert(`${product.name} costs # ${product.price}`);
    payment(product.price);
  }else{
    alert("Sorry Product wasn't found")
    dialog()
  }
}

function payment(price){
  let amount = prompt("Pay for Product");
  if (amount == 1000 || amount == 500 || amount == 200){
    if (amount > price){
      let balance = amount - price;
      alert(`Purchase was successful, your balance is # ${balance}`)
    }else{
      alert('Insufficient amount entered')
      dialog()
    }
  } else{
    alert("Sorry amount entered wasn't recognized")
    dialog()
  }
}

function dialog(){
    let con = confirm("Click OK to try again or click Cancel to walk away")
    if (con == true){
      shop();
    }else{
      alert("Thank you for trying out our store")
    }
}