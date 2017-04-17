# ![alt tag](https://github.com/Jyotsna-Singh/SearchVidz-YoutubeAPI/blob/master/img/logo.PNG)
**SearchVidz** is a Video Search Engine built using the Youtube API v3.

* Features/Technologies: 
  * HTML5, CSS3, JavaScript
  * Youtube Data API v3
  * jQuery $.get() request
  * inserting HTML via html() method
  * Uses search.list method to search videos.
  * 'Fancybox' lightbox script to open the video on our site instead of being redirected to YouTube.

## Version
1.0.0

## Live Demo - SearchVidz
 [![alt tag](https://github.com/Jyotsna-Singh/SearchVidz-YoutubeAPI/blob/master/img/green-button.PNG)](http://jyotsnasingh.com/projects/JavaScript/SeachVidz-YoutubeAPI/)
 
## Usage
  In your js/script.js, find functions search(), prevPage(), nextPage().  
  
  Enter your API key in the GET request for all the 3 functions.
  
   	 $.get(
		"https://www.googleapis.com/youtube/v3/search",{
			part: 'snippet, id',
			q: q,
			pageToken: token,
			type:'video',
			key: 'YOUR_API_KEY_HERE'},
			function(data){

## Snapshots
  
 **Search Video** | 
--- |
 ![alt text](https://github.com/Jyotsna-Singh/SearchVidz-YoutubeAPI/blob/master/img/search.PNG)   |
 
 **Play Video** | 
--- |
 ![alt text](https://github.com/Jyotsna-Singh/SearchVidz-YoutubeAPI/blob/master/img/video.PNG)   |

## Vendors
jQuery - [http://jquery.com](http://jquery.com) 

Fancybox - [http://fancybox.net/](http://fancybox.net/)


## License
MIT License


# CodeIgniter 2
Open Source PHP Framework (originally from EllisLab)

For more info, please refer to the user-guide at http://www.codeigniter.com/userguide2/  
(also available within the download package for offline use)
