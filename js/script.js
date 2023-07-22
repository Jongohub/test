//Without using the local storage API bellow, the cart value or variables bellow are destroyed when navigating to a new page
//When you navigate to a new page, the previous page's JavaScript state is lost, including the cartItems and cartTotal variables.
// let cartItems = [];
// let cartTotal = 0;



// You can use the localStorage API to store the cart data locally in the user's browser. 
// This allows you to access the cart data from any page on your website.

// Check if cartItems exist in localStorage, and initialize if not


// if (localStorage.getItem('cartItems')) { //with just this code, when i refresh a page the cart is empty until i click another add to cart, so we will create another function to solve this issue 
//   cartItems = JSON.parse(localStorage.getItem('cartItems'));
//   cartTotal = parseFloat(localStorage.getItem('cartTotal'));
// } else {
//   cartItems = [];
//   cartTotal = 0;
// }


// Function to initialize the cart UI when the page loads Now the problem of cart details not showing on the index page untill i refresh 
// and not showing at all on the cart page and other pages will be solved
function initializeCartUI() {
  const cartItemsList = document.getElementById('cart-items');
  const cartTotalElement = document.getElementById('cart-total');

  if (localStorage.getItem('cartItems')) {
    cartItems = JSON.parse(localStorage.getItem('cartItems'));
    cartTotal = parseFloat(localStorage.getItem('cartTotal'));
  } else {
    cartItems = [];
    cartTotal = 0;
  }

  cartItemsList.innerHTML = '';
  cartItems.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = `${item.name} - $${item.price}`;
    cartItemsList.appendChild(listItem);
  });

  cartTotalElement.textContent = cartTotal;
}

// Call the function to initialize the cart UI on page load
initializeCartUI();


function addToCart(productName, price) {
  cartItems.push({ name: productName, price: price });
  cartTotal += price;
  saveCartToLocalStorage(); //save values so JS state is not lost on navigating to a new page
  updateCartUI(); //update front end html on index page or cart page
}

function updateCartUI() {
  const cartItemsList = document.getElementById('cart-items');
  const cartTotalElement = document.getElementById('cart-total');
  cartItemsList.innerHTML = '';
  
  cartItems.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = `${item.name} - $${item.price}`;
    cartItemsList.appendChild(listItem);
  });
  
  cartTotalElement.textContent = cartTotal;
}

function saveCartToLocalStorage() {
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  localStorage.setItem('cartTotal', cartTotal.toString());
}

                                // NOTE THAT
// we can also use a Backend Data Storage as opossed to the LocalStorage being used in this JS file:
// Instead of using localStorage, you can store the cart data on the server-side using a backend database or session management (remember super globals in PHP).
// When the user adds items to the cart, you send the data to the server, and the server keeps track of the cart items and total for that user session. When the user navigates to the cart page or any other page, the server can provide the cart data specific to that user.
// Using a backend solution provides more scalability and security, especially if you have a large number of products or users.