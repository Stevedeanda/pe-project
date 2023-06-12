

<style>

	
body {
	background-color: #ddeffe;
	color: #033041;
}

inner-column {
	max-width: 800px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	/*border: green solid 1px;*/

	/* horizontal scroll */
	overflow: hidden;
}

.title {
	font-size: clamp(50px, 10vw, 120px);
	padding: 10px;
	text-align: center;
	/*border: blue solid 2px;*/
}

.intro {
	text-align: center;
	font-size: 16px;
	padding: 20px;
}

.product-list {
	display: grid;
	grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  	grid-column-gap: 10px;
  	grid-row-gap:10px;
  	justify-items: center;
  

	/*display: flex;
	padding: 20px;*/
	/*horizontal scroll */
	/*flex-direction: row;
	gap:  1rem;
	overflow-x: auto;*/

	/* NEW: SCROLL SNAP MAGIC */
	/*scroll-snap-type: x mandatory;*/
	
}

.product {
	display: block;
	height: auto;
	padding: 20px;
	max-width: 320px;
	/* horizontal scroll */
/*	max-width: 100%;*/
/*	flex-shrink: 0; /* secret magic */*/
/*	scroll-snap-align: center;  start / center / end - and more */
}


product-card {
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
	border: gray solid 1px;
	border-radius: 10px;
	padding: 10px;
	
	height: 450px;
	/*max-width: 400px;
	margin-left: auto;
	margin-right: auto;*/
}

.top {
	padding: 20px;
}

product-card .name {
	font-size: 1.7rem
}

product-card .brand {
	font-size: 18px;
}

product-card a {
	color: black;
}

.visual {
/*	border: green solid;*/
	/*display: flex;
	width: 200px;
	height: 200px;
	margin-left: auto;
	margin-right: auto;*/
	
}

.visual img{
	object-fit: contain;
/*	border: red solid;*/
}

.price {
	padding: 20px;
	font-size: 30px;
}

/*.product summary {
	display: block;

}*/

.product summary {
	text-align: left;
	margin-bottom: 15px;
	font-size: 20px;
	font-weight: 700;
	cursor: pointer;
}

/*summary::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: start !important;
}*/

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
	font-size: 16px;
}

/* Breakpoint */


	
</style>

























