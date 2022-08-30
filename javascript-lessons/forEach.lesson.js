			


			// Thursday's lesson notes start here. Follow along in journal pages 24-29.

			var myarray = ['well', 'this', 'is', 'cool', 'bruh'];

			var myarraytwo = ['oh', 'snap', 'this', 'actually', 'works'];

			function coke(name) {
				console.log("I am " + name + "!!!!");
			}

			for (var current = 0; current < myarray.length; current ++) {
				console.log("---->", myarray[current]);
			}

			for (var current = 0; current < myarray.length; current ++) {
				coke(myarray[current]);
			}

			function magic(anArray, aFunction) {
				for (var i = 0; i < anArray.length; i ++) {
					aFunction( anArray[i]);
				}
			}

			function printstuff(item) {
				var list = document.createElement('li');
				list.textContent = item;
				list.classList.add('list-item');
				document.body.appendChild(list);
			}

			console.log(magic(myarray,coke));
			magic(myarray,coke);
			magic(myarray,printstuff);

			function magictwo(anArray, aFunction) {
				for (var i = 0; i < anArray.length; i ++) {
					aFunction( anArray[i], i);
				}
			}

			function printstufftwo(item, index) {
				var list = document.createElement('li');
				list.textContent = index + " " + item;
				list.classList.add('list-item');
				document.body.appendChild(list);
			}

			magictwo(myarray, printstufftwo);

			myarraytwo.forEach( function(item) {
				printstuff(item);
			});

			myarraytwo.forEach( function(item, b) {
				printstufftwo(item, b);
			});

			// Thursday's lesson ends here. Check out the notes I wrote in the bullet journal to get more into depth about how to use the forEach loop.
			// You will find the notes in pages 24-29.


















			