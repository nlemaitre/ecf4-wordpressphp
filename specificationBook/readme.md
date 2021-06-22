# Project Country

Site to deploy

***
### Functional requirements :
- The site must therefore be easy to use, facilitate access to all<br>
- He must be pleasant to read like its paper version<br>
- As the newspaper has a reputation for communicating sporting and cultural activities, <br>
  it is important to notify access for activities and in particular these two<br>
- It is specified that a part must also be devoted to the dissemination of the information of the day / first news / and in chronological order<br>
- the site must be responsive, this aims to reach mobile users<br>


#### List of tools used : 
Wordpress / Html, CSS, PHP / Bootstrap / phpMyAdmin / Xampp / Pencil 

***
#### Plugins used : 
Fakerpress / event calendar / Insert headers and footers

***
### Site reference : 
I based it on usnews.com then i simplified<br>

***
### Technical choices : 
After visiting several sites, I opted for usnews which had a rather simple and efficient layout !
I finally kept bootstrap since it was a continuation of the theme I had started to create before the internship !
The model being completely inspired by usnews I did not respect it completely, I ended up doing a reversal for the sake of ease!
I used Fakerpress to generate fake articles for the sake of speed !

***
### Sécurity : 
About the security part, a few simple actions have been carried out :<br>
- Changing prefix table<br>
- Hide Wordpress version using this line `remove_action("wp_head", "wp_generator");` which is in `functions.php`<br>
- Changing administrator account

***
### Process for install : 
An average user can install this project locally on their machine by doing a: git clone, or by downloading the project as a zip. Then insert it into the wordpress wp-content / themes file!<br>
A database must be provided via phpMyAdmin<br>
You must also use Xampp for local deployment<br>
Note that: the site is mainly made up of page templates to facilitate the layout of an "Information Post" site. No test was performed for another chosen one.<br>
Also, be careful when using fakerpress as it can cause CSS problems!<br>

***
## Thank you for reading !!! 
