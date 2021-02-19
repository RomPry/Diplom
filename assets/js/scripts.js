function addToCart(id) {
	const currentCartString = getCookie('cart');
	const currentCart = (currentCartString === '') ? {} : JSON.parse(currentCartString); // { 2: 5 }
	if (currentCart.hasOwnProperty(id)) {
		currentCart[id] += 1;
	} else {
		currentCart[id] = 1;
	}
	setCookie('cart', JSON.stringify(currentCart), {
		path: '/'
	});
}