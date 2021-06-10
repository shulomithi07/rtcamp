# VIDEO ENCODING CHALLENGE
##### _UPLOAD PROCESS WATERMARK CONVERT ROTATE_

##
##

This is a video encoding challenge which is a part of recruitment process held in the month of april-may 2021. In this challenge there are 4 major tasks (upload,convert,thumbnail,watermark,transformer) given to be performed on the video.The languages used in this challenge are PHP, HTML, CSS, JAVASCRIPT. And the libraries used in this projects are FFMPEG for video encoding and composer.Hosted with the help of google cloud. A mobile-ready application it is.


## Features of the website
- ##### UPLOAD
- ##### CONVERT
- ##### THUMBNAIL
- ##### WATERMARK
- ##### ROTATE
- ##### RESPONSIVE


##  TECHNOLOGIES

- ##### PHP 8.0.3
- ##### HTLM5
- ##### CSS3
- ##### JAVASCRIPT 1.7



## The Beginning
##### SIGNUP:
When the user enters credentials and submits, a random token is generated through code and attached to the activation mail URL. The activation URL points to the "activation.php" page, where the user's inactive status changes to active in the database. When the code sends mail to the user, the page redirects to the login page with a session message " Check your email for activation link {with @email}.". 
#

![SignUp Page Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/signup.gif "SignUp")

#
After the user clicks the activation mail:
The mail redirects to the "activation.php" page, where the URL pattern of the "activation.php" page has a token in it, and it is accessible by the "GET" method.
 If the token from the URL matches the database token, then the user's inactive status changes to active. After that, the page redirects to the login page with a session message "YOUR ACCOUNT IS ACTIVATED PLEASE LOGIN."

#
![SignUp Page Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/activation.gif "Activation")
#

##### LOGIN:

As the user has an account now, he can directly log in to his account and access the features. If the user credentials are not present in the database, and the user tries to log in, then an alert message is shown that the account doesn't exist and asks him to signup. There is also a feature of forgot password on the login page, which helps the user reset his/her password. 

To reset the password when he forgets user can use the forgot password link in which he has to enter his mail id. He will get an email with the reset password link through which he can reset the password.

#
![Login Page Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/login.gif "Login")
#

##### HOMEPAGE:
So far, now the user has just created an account and logged in to it. 
The user's nickname is printed on the screen saying hello when he logs in. 
If the user is already an account holder and has some videos uploaded in the database, his/her videos directly display on the screen when logged in. The videos have a thumbnail and a gif over them. When the user hovers on the video, the gif plays.

#
![HomePage Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/homepage.gif "HOMEPAGE")    
#

## UPLOAD

- ##### upload form:

        
         The user uploads a video file in the given input field.
         Writes a watermark text for the video watermark 
         And also asked for the size of the watermark in pixels
         When the user fills in these details and submits, the progress bar shows the 
         upload status.

- ##### upload.php
 

 When the user submits the form, the current page redirects to the upload.php page. The user can see the progress bar while uploading the video. The URL pattern of the "convert.php" page has the video name in it. The user can submit the video in any video format, and internally the video is converted to mp4 via FFMPEG-PHP. At the time of upload, the static image and gif extraction process from the video will happen.  If the video already exists in the database, the user gets a message that the video already exists. Else the video is directly uploaded,  echo statements display details about the upload process in the upload block.
        
 #
 ![Upload Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/uploadVideo.gif "UPLOAD")    
 #
 
[The upload file link](https://github.com/shulomithi07/rtcamp/blob/master/upload.php)

## CONVERT

- ##### Convert option on video
        
        
 _There is a dropdown menu for every video with an icon of a hand._

        When the user hovers over the hand icon, a bunch of options 
        [.wmv, .ogg, .webm, rotate, delete] are shown. 
        The user can do any of the mentioned tasks on the video.
        If the user wants to convert video format, then the user needs to hover on hand and find the desired format.
        After deciding the format user can click on the corresponding video format and convert the video.

- ##### Convert.php
    

    Suppose if the user wants to convert the video into type Ogg, he/she should click on the button Ogg. On button click, the current page redirects to the "convert.php" page. The URL pattern of the "convert.php" page has the video name and conversion type they are accessible by the "GET" method. For instance, I have provided "3" conversion types [OGG, WMV, WEBM]. As the conversion type is Ogg, the code goes through the "If-Else" statement to convert into the specified format. After the type conversion of the video,  A confirm box appears to the user to download the video. If the user confirms, the video gets downloaded, or the converted video discards.

#
![Convert Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/convert.gif "CONVERT")    
#
[The Convert file link](https://github.com/shulomithi07/rtcamp/blob/master/convert.php)    

## THUMBNAIL

- ##### Making of Thumbnail

        
    When the user uploads the file with watermark and font size,
    The Conversion of user-submitted video to MP4 happens in the background.
    The Process of extraction of the image and the gif from the video happens with the help of  FFMPEG-PHP.
    The image, gif are also called along with the video[location of the destination files are in the database].
     The swapping of the thumbnail and the gif occurs with the help of javascript mouse events like mouseover and mouse-out.

    #
    ![Thumbnail Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/thumbnail.gif "THUMBNAIL")    
    #
## WaterMark

        
        The user should give a watermark and font size while uploading the video,
        but the font size is not mandatory.
        The defaultValue of the fontsize replaces if user didn't specify the required fontsize
        At the bottom right corner of the video, the watermark inserts with the help of the FFMPEG-PHP library.

   #
   ![Watermark Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/watermark.gif "WATERMARK")    
   #
## ROTATE
        
        As I described earlier in the above context, there is a dropdown menu for every video,
        and there are multiple functionalities to perform on a video.
        One among them is to rotate the video. When the user clicks on the rotate button,
        the page redirects to the rotate.php page. 
        Here the video rotates clockwise and anti-clockwise direction on a button click.
 
   #
   ![Rotate Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/rotate.gif "ROTATE")    
   #
 
## RESPONSIVE

        This website is a mobile-friendly website which implies that the website looks good in any viewport, 
        and it is user-friendly in any viewport. It might be a mobile device or a tablet, or even on a laptop.
        It functions all fine.
  #
   ![Responsive Image](https://github.com/shulomithi07/rtcamp/blob/master/Displayimages/responsive.gif "RESPONSIVE")    
   #
## Installation

App requires [FFMPEG-PHP](https://github.com/PHP-FFMpeg/PHP-FFMpeg), [Composer](https://getcomposer.org/) and [ffmpeg](https://ffmpeg.org/download.html) to perform the video encoding.


## Easy Access
| FUNCTIONALITIES |FILES |
| ------ | ------ |
| SIGNUP | https://github.com/shulomithi07/rtcamp/blob/master/signup.php |
| ACTIVATE | https://github.com/shulomithi07/rtcamp/blob/master/activation.php |
| LOGIN | https://github.com/shulomithi07/rtcamp/blob/master/login.php |
| HOMEPAGE | https://github.com/shulomithi07/rtcamp/blob/master/homepage.php |
| UPLOAD | https://github.com/shulomithi07/rtcamp/blob/master/upload.php |
| CONVERT | https://github.com/shulomithi07/rtcamp/blob/master/convert.php |
| ROTATE | https://github.com/shulomithi07/rtcamp/blob/master/rotate.php |
| DELETE | https://github.com/shulomithi07/rtcamp/blob/master/deleteVideo.php |
| LOGOUT | https://github.com/shulomithi07/rtcamp/blob/master/logout.php |



>  _Shulomithi_
