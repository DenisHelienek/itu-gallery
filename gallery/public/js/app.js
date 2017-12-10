$(document).ready(function()
{

	var slider = new Slider('#s1', {
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});
});

$(document).ready(function()
{

	var slider = new Slider('#s2', {
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});
});

function createAlbum() {
    var albumName = prompt("Please enter album name:", "Album");
    if (albumName != null && albumName != "") {
        window.location.href="gallery?name=" + albumName;
    }
}

function renameAlbum(name) {
    var albumName = prompt("Please enter album name:", name);
    if (albumName != null && albumName != "") {
        window.location.href="gallery?name=" + albumName + "&changed=" + name;
    }
}