// function double(number) {
// 	return number * 2;
// }

// function triple(number) {
// 	return number * 3
// }

// export {
// 	double,
// 	triple
// }

const SOME_NUMBER = 9872;

function _double(number) {
	return number * 2;
}

function _triple(number) {
	return number * 3;
}

function doUltimateMath(number) {
	return _double(number) + _triple(number) * SOME_NUMBER;
}

export {
	doUltimateMath
}