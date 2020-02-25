# Building-MVC
building mvc from scratch using native PHP

### Explanation of MVC
To avoid these kinds of situations, developers started to think about a new way of organizing the code of a website. One way of doing it is the MVC design pattern. The goal is to divide the project into three big parts:
### Model: 
**interacts with the database. It receives, stores and retrieves data for the user.**
### View: 
**displays information to the user and integrates data from the controller.**
### Controller:
**sends and receives data from the model and passes to the view.**
![Image description](https://miro.medium.com/max/1174/1*xnuMvzXzmAxYXcRrd1Wj5Q.png)

# The structure

### To set up this design pattern, we are going to structure our projects. We can find a lot of possibilities over the internet. But here is what I suggest:
![Image description](https://miro.medium.com/max/147/1*IA0nHOylfQYxjnGwi1XGaQ.png)

### As you noticed, we retrieve the backbone of the MVC framework with the three folders (Models, Views, Controllers) and some other stuffs :
* Webroot folder is the only directory accessible by the user.
* Router.php, dispatcher.php, request.php, .htaccess are part of the routing system
* Config : all the configuration needed by our website. We will retrieve then the db.php file which is the single access point to our database (singleton class).
