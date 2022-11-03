console.log ('Trying to figure this out');

// function MusicLibrary(song, artist, genre) {

// 	this.song = song;
// 	this.artist = artist;
// 	this.genre = genre;
// 	this.trackId = 1;
// 	this.library = [];

// 	this.display = function(note = "") {
// 		console.log(`---${note}`);
// 		console.log('Music Library: ', this.library);
// 		alert(`${this.song} song was added to Library`);
// 	}

// 	this.add = function() {
// 		const playlist = {
// 			number: this.trackId++,
// 			song: this.song,
// 			artist: this.artist,
// 			genre: this.genre,
// 		};
// 		this.library.push(playlist);
// 		this.display(`added ${this.song}`);
// 	}

// }

// const trackOne = new MusicLibrary("One More Time", "Daft Punk", "EDM");
// const trackTwo = new MusicLibrary("Propaganda", "DJ Snake", "EDM");


//trackOne.add();
//trackTwo.add();

function Music() {

	this.library = [];
	this.trackId = 1;

	this.display = function (note = "") {
		console.log(`---${note}`);
		console.log('Music Library: ', this.library);
		//alert(`${this.song} song was added to Library`);
	};

	this.add = function (song, artist, genre) {
		const tracks = {
			trackId: this.trackId++,
			song: song,
			artist: artist,
			genre: genre,
		};
		this.library.push(tracks);
		this.display(`Added ${song}`);
	};

	this.delete = function (index) {
		this.display(`Deleted ${this.library[index].song}`);
		this.library.splice(index, 1);
	}
};

const myLibrary = new Music();

myLibrary.add("One More Time", "Daft Punk", "EDM");
myLibrary.add("Propaganda", "DJ Snake", "EDM");
myLibrary.add("Go DJ", "Lil Wayne", "Hip-Hop");

myLibrary.delete(0);

Music.prototype.favorite = function (index) {
	this.library[index].favorite = true;
	this.display(`Favorite: ${this.library[index].song}`);
};

myLibrary.favorite(1);



