# Layout Video Notes

Looks like Derek will go over the first layout or all of them, not sure but I will be taking notes here about the process that he went thru to get this done. For me this one took me 3 hours, so I was one of those people that took way too long with this. 

## Looking at layout
- Going over the different views and trying to figure out how many boxes he will need.
- The whole layout goes inside a module, we shouldn't mess with the section and inner-column, that way we can move the modules around. 
- **Noticed** that on the last view two boxes will need to go inside another box to be able to get the boxes in the right way
- _Did I mark it up_: I didn't mark it up but I did take the time to see how many boxes I would need. I started by looking at all three screen sizes and see best possible way to break this into boxes.
- Derek is using the responsive layout garden he has already to add this layout.
- _Where did I put it_: I put it in a new folder, I wanted to start fresh. With the idea of sharing the css and using more custom components and custom properties. I haven't divided them into module folders, I like being able to see everything for now.
- **Noticed** better to use a dash when creating custom components.
- He has the templates in a folder with the css style in them. 
- Starting with two files, the template.php and the style.css, and both files live in the same folder which is the module
- Pretty much getting everything setup before starting to code. 

## Begin coding
- Looks like Derek is starting at the bigger screen size first. 
- **Noticed** that you can create a list using for each by just creating an array. 
	- '<?php foreach ( [1, 2, 3, 4, 5, 6] as $article ) { ?>'
	- Then below this code you write out the list and it will repeat it 6 times. 
- Derek got the code all written out and ready to start to styling

## Styling 
- He is starting with the typography, looking at the typography he has and looking to see which one to use. 
- **Noticed** he said that a style guide would be great to have so you can see what the the styles look like and be easier to decide what to use. I am sure we will create one soon.
- _Do I have typography.css_: I do but I think that I don't have my voices set up in a way that it is helpful to me. 
- Putting borders on his boxes to be easier to move them around
- He uses the custom component to scope all the elements so that there is no way it can be used in a different module.
- Starting with the header 
- He puts the break point below the element that is being changed.
- **Noticed** that he used 'grid-template-columns: 1fr 1fr;'. This means that it will create one fraction and another fraction that will be equal next to each other. 
- He is trying to figure out why the style is not displaying flex. He misspelled the custom property, it happens to me a lot.
- Speed run of Derek troubleshooting why the display won't flex. Left the display:block at the bottom and so it was reading it. 
- Looks like he got good template and super clean, at least compared to mine. He got the breakpoints pretty much done. Just gotta style the small things.
- **Noticed** a cool developer trick to make the borders go away by switching one number. '--border-size: 4px'. Then when you are done with the borders, change the "4" to 0 and borders go away. 
- At the bottom of the images he was getting some black rectangles. He is using a the dev tools to find solutions
- **Noticed** that he used 'align-self: start' to get the images to not have the black rectangle. Basically, it allows the parent to align itself to the start of the grid (which is the top in this case) and let the images fill in the space they can without trying to stretch the images.
- He is using grid a lot, something I didn't do much. I think I used it but not a lot. 

## Alignments
- Going over how the boxes can align with each other. 
- Grid can help make things more cohesive.
- He is getting rid of the parent that was holding the writing. So now he has three boxes.

## Grid
- He will use grid to move the three boxes around.
- When he says that he define the grid he means this 'grid-template-columns: 1fr 1fr;'
- Now he will define how to fit the boxes into the grid.
- You get the first box and you use 'grid-column' to decide where it will go.
- **Noticed** that Derek pointed out that the grid has numbers like a cell. You use those numbers to tell the boxes where to go.
- You use 'grid-column: 1 / 2;' and that will put the box where you need it.
- Grid-column decides left to right on the cell table. You use grid-row to go up and down. 
- You can use
	- '''module-one article {
				grid-column: 1 / 2;
				grid-row: 2 / 3;
			}'''
	- This is a cell table with 4 squares, the code above will put that article on the bottom left square. 
- Grid had four squares but when he put the image-grid to take up two squares, it pushed the article box up and the header lost all the empty space it had. 
- Flexbox is one dimensional and Grid is two-dimensional. You can do more with grid, it is still pretty new so people still learning how to use it. 

## Breaking the Grid
- Derek accidentally got the articles and images to have the same grid space.
- It is a mystery for I don't even know how grid works so that I am completely lost with grid. 

## Commit
- He is cleaning up his code on tower before he pushes the commit.
- Working on getting better commits.












