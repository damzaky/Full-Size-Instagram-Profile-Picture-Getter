# Full-Size-Instagram-Profile-Picture-Getter
Fetch instagram full size profile picture URL, demo here: https://damzaky.github.io/generator/Full-Size-Instagram-Profile-Picture-Getter

## Background
So some times ago I was wondering if I could download a profile picture from instagram, I could easily do that by right click on the image and save it, the problem was that it's not in its full size. I made a little experiment to find out that to get the full size of the image I only have to remove `/150x150` from the image URL.

## What this repo does
This repo is only making the thing that I explained above easier, so that you can obtain the URL of the full image directly by only entering the instagram username

## How it works
Just upload the `engine.php` to your hosting (remember to use HTTPS), then to use it just visit `https://yourhosting.com/engine.php?u=USERNAME` specify the USERNAME at your will. The page will return a displayed profile image.

## Notes
The method that I use on this repository is probably not the best method, since I assume that the first image in a profile page is always the profile picture, if instagram change this situation, a change on the array index will be needed.
