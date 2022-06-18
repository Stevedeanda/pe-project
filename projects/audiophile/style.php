

<style>
	
body {
	background-color: #ddeffe;
	color: #033041;
	border: blue solid 10px;
}

.inner-column {
	max-width: 800px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	/*border: green solid 1px;*/
}

.title {
	font-size: clamp(50px, 10vw, 120px);
	padding: 10px;
	/*border: blue solid 2px;*/
}

.product-list {
	display: flex;
	flex-direction: column;
	gap: 10px;
	flex-wrap: wrap;
	padding: 10px;
}

.product {
	display: block;
	/*border: red solid 1px;*/
	width: 100%;
	height: 100%;
	
}


product-card {
	display: flex;
	flex-direction: column;
	justify-content: center;
	border: gray solid 1px;
	border-radius: 10px;
	padding: 10px;
	padding-bottom: 40px;
	max-width: 400px;
	margin-left: auto;
	margin-right: auto;
}

.top {
	padding: 20px;
}

product-card .name {
	font-size: 40px;
}

product-card .brand {
	font-size: 18px;
}

.visual {
	width: 100%;
}

.price {
	padding: 20px;
	font-size: 30px;
}

.product .features h3 {
	display: block;
	text-align: left;
	margin-bottom: 15px;
	font-size: 20px;
	font-weight: 700;
}

.product .features li {
	/*border: green solid 2px;*/
	display: block;
	text-align: left;
	margin-bottom: 15px;
}

.product .features li::before {
	content: "🔊";
}

.description {
	display: block;
	text-align: left;
	padding: 20px 0;
	line-height: 1.5;
	font-size: 20px;
}

/* Breakpoint */


	
</style>

























