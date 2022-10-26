

console.log('Lets do this thing');

const musicApp = {

	playlists: [],
	trackId: 1,

	print: function(note = "") {
		console.log(`---${note}`)
		console.log('Playlist: ', this.playlists);
	},

	add: function(song, artist, genre) {
		const playlist = {
			number: this.trackId++,
			song: song,
			artist: artist,
			genre: genre,
		};
		this.playlists.push(playlist);
		this.print(`Added ${song} by ${artist}`);
	},

	remove: function(index) {
		this.print(`Deleted ${this.playlists[index].song} by ${this.playlists[index].artist}`);
		this.playlists.splice(index, 1);
	},

	favorite: function(index) {
		this.playlists[index].favorite = true;
		this.print(`${this.playlists[index].song} by ${this.playlists[index].artist} was added to Favorite`);
	},
}

musicApp.add("One More Time", "Daft Punk", "EDM");
musicApp.add("Propaganda", "DJ Snake", "EDM");
musicApp.add("Go DJ", "Lil Wayne", "Hip-Hop");
musicApp.add("God's Plan", "Drake", "Hip-Hop");
musicApp.add("Everything Now", "Arcade Fire", "Rock");
musicApp.add("Master Of Puppets", "Metallica", "Rock");
musicApp.add("El Apagón", "Bad Bunny", "Reggaeton");
musicApp.add("Fix You", "Coldplay", "Indie");
musicApp.add("Barbara Streisand", "Duck Sauce", "EDM");

musicApp.remove(4);

musicApp.favorite(3);

musicApp.add("Worst Behavior", "Drake", "Hip-Hop");

musicApp.favorite(6);

musicApp.favorite(2);