lesson-notes.md


# lesson notes

## Practice, practice, practice (June 7)

 _Questions_

- How do I get the decimals to work on inputs? _Derek answered this, we use an attribute called `step`_.

### Checklist

- [x] do the daily lesson exercise
- [x] add perpetual-education, sheriffderek, bdlowery as collaborators to my pe-projects in git-hub.
- [x] lesson-notes.md in barebones pe-project folder.
- [x] take notes, questions from the lecture/videos and commit those (share link when done).
- [x] Watch video and start thinking about form styling.
- [x] Making a lot of forms, let's try to put them in `/steve/pe-projects/efp`. Need to make a folder for them. 
- [x] Create an index page for the forms I have so far, that link to each form.
- [x] Set the forms so that they all pull from the same set of styles. Consider matching it to your personal site and using that - or having a form page specific styling. 
- [x] Have 4 forms (in total)
	- [x] with normalized styles
	- [x] and tested
- [x] Get together with another student- and take turns walking through 2 of your forms. 
- [] try/add to the audiophile-data on git.

### Video Notes

- all the browsers show buttons and inputs in a different style. They must have defaults attached to them.
- the next important inputs after text and numbers are
	- radio (which is a little circle you can check)
	- checkbox (which is a little box you can check)
- Derek made a custom element for combining label and input together.
- Why is the font different in the input than the label?
- What are some cool attributes?
- How to make the style look the same between all the browsers?
- Explore the web develop tool and try to create a reset setup going on. 

// echo $filePath;
		// if ( file_exist($filePath)) {
		// 	echo createLink($filePath, $fileName);
		// }

**Web dev exploring notes**

- _Inputs_
- I see that `input` has a few styles in it:
	`background-color: field;` 
	`padding: 1px 2px;`
	`border-width: 2px;`
	`border-style: inset;`
	`border-color: -internal-light-
		dark(rgb(118,118,118),rgb(133,133,133));`
	`border-image: initial;`

	- I can probably reset all of these to try to style my own inputs.
	- Input doesn't seem to have a font, it's all blank

- _Buttons_
- They got a lot styles too:
	```
		background-color: buttonface;
		padding: 1px 6px;
		border-width: 2px;
		border-style: outsets;
		border-color: buttonborder;
		border-image: initial;
		color: buttontext;
	```	
	- In order to style the button we would need to reset _background-color_, _padding_, _border_, and _color_. 

### Exercises for today

#### Plan out an exercise

- I will do the **Counting the Number of Characters** from the exercise for programmers book

- The pseudocode
	- create a form using the form element, write method="POST"
	- create a paragraph element and write 'Let's count characters'
	- create a label element and write 'Write your characters here'
	- create an input element, give it attributes
	- create a button and give it attribute
	- put the label and input inside a div to give it style order
	- add the style sheet already made for this to focus on php part
	- create a default variable that will be for the string character
	- create a if statement that will grab the information from the form
	- in the if statement I will use 'isset' to grab POST from the form
	- this way if something was submitted it will grab that information
	- then I will use the default variable in the if statement so that it will replace it with the input submitted
	- then I will use strlen(variable) to get it to count the characters that were submitted
	- I will then put the answer in a message variable to display it at the bottom of the form
	- I will test it out.

### Conclusion

- I was able to get my index up and running. I style it a bit to mactch my site but not completely happy with it. I was able to do make all the forms to have some type of uniform style. Not the best but I wasn't focused on the style. I did reset some of the settings for button and inputs to make them all the same. I did the pseudocode here and it actually helped a lot before writing the code. Almost served as a list of things to do. 
- The only thing I didn't check off my list was adding to the audiophile. 


## Server Forms (June 6)

- POST is not a random name, it's the actual name to use to push the form from HTML to PHP.
- I realized that the element forms has no "s" in it it's actually form.
- I learned what a placeholder is, tells you what to put in the input area, once you start typing the placeholder dissappears. 
- A good way to know what label, input, and button are was to put padding on them and to see what would happen. They are display: inline-block because the padding went all the way around but only around the element. Didn't strech across the whole screen like a block element would. 
- A good way to style label and input is to put them inside the div element and give it a class. 
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
	echo "<"p>$total<"/p>";
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
