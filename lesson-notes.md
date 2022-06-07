lesson-notes.md


# lesson notes

placeholder

## server forms

- POST is not a random name, it's the actual name to use to push the form from HTML to PHP.
- I realized that the element <forms> has no "s" in it it's actually <form>.
- I learned what a placeholder is, tells you what to put in the input area, once you start typing the placeholder dissappears. 
- A good way to know what label, input, and button are was to put padding on them and to see what would happen. They are display: inline-block because the padding went all the way around but only around the element. Didn't strech across the whole screen like a block element would. 
- A good way to style label and input is to put them inside the <div> element and give it a class. 
- You are also able to change the display to display:flex to better control where it will be on the page. 
- Good idea to give the form a max-width to keep it from going all across the page. 
- Learned that we can style button by using "button[type="submit"]" in CSS.
- Learned about the secret global variables that you can't see but are there. 
- print_r($stuff) and var_dump($stuff) show you the array that is created by POST.

	$stuff = $ POST;
	echo $_POST["berries"]:
- Learned that this will grab the variable you input, once you press submit on the form it will show you what you wrote in the input. 

	  if ( isset($ POST["submitted"])) {
	$guests = $_POST["guests"];
	$berries = $_POST["berries"];
	$total = $guests * $berries;
	echo "<p>$total</p>";
- Here, once you hit submit, the form will take the data and it will multiply the inputs that were submitted. Then it will echo and display the total.
- We learned that input has many types 
	- type = text
	- type = number
	- type = email
	- type = password
	- type = submit
	- type = range
- Input comes with a lot more types but these are the ones from today's video
- Input does not inherent font, have to put them in style.
- Input has a lot of attributes as well.
- Input is a self-closing tag
- Attributes help to make certain types more specific and set boundaries to what is being inputted. 
	- value
	- min (the least amount of numbers to input)
	- max (the most amount of numbers to input)
- Floatval($berries) turns the string into numbers of any kind. 
- When using numbers and you want to make it so that the inputs don't go into the negatives. There are two ways to do this.
	- First is you can write an if statement where you put the variable to be greater or equal to zero. Doing this, a negative number can be put in the input but when you go to submit it will not work. 
	- Second way is you can add a attribute of min=0 so that, no number below 0 can be used. When you try it will give you an error message. 


- In conclusion
	- I did four practice runs and I feel like I need more practice. I get the the form part for the most part. I also get the styling. When it comes to the php part, I tend to go back to my notes for reference. I definitely need to spend more time just getting the hang of the php part. We are suppose to be able to anything yet I feel like I am unable to come up with any new ways to do these forms. 
