The purpose of this test exercise it is to check your skills in task requirements understanding, user interface development and back-end development. 
Please pay attention to your sources quality.
As I mentioned before, we provide service for Personal Trainers businesses. 
So let create some simple one-page application in this field. 
Each trainer may have a few clients and these clients attend trainer’s classes. 
Please create simple application, which will help such personal trainer manage his clients (create new client, edit existing one and delete any client) and manage weekly recurring classes.
Weekly recurring class it is something like “Every Monday, Tuesday and Sunday” class which have description (for ex. “Yoga” or “Boxing”), start time (for ex. 8am) and duration (for ex. 1 hour 30 mins).
To create new recurring weekly class, user should enter data fields like – Recurring Class Start Date, Recurring Class End Date, Repeat On field (list of week days Monday, Tuesday etc to check, you can use checkboxes here or multiselect), Class Description, Start Time and Duration.
You can use grid to show classes list, as an example:
Date	Time	Duration	Class Name	Clients Assigned	Assign clients 	Edit Class	Delete Class
22nd May, 2018	8am	1 hour 30 mins	Boxing	Nick Smith, Pole Rays	Assign	    Edit	    Del
23rd May, 2018	9am	1 hour 15 mins	Weekly Track	No clients assigned	Assign	    Edit	    Del
…							

As you can see, there are 3 actions available – assign clients to the class, edit class and delete class. Also, “Create New Weekly Recurring Class” action should be available. 
If user will create new recurring class schedule, it should remove all existing classes and create new classes from scratch.
Client entity is completely easy and will have just two fields – First & Last names. Alsothere should be available CRUD actions for clients – create, update and delete.
Please place clients list &classes list on the same page. You can use Twitter Bootstrap tabs or accordion to separate it, as you wish. 
Also all actions should be performed with using AJAX requests - no new page loads please, all features should work on the same page. You can use modal windows to open “Add Client” or “Add Recurring Class” forms.
Software requirements – for back-end please use any lightweight PHP MVC framework (your own solutions are welcome)and MySQL database, jQuery and Twitter Bootstrap for front-end.
The result should be an archived zip file with application sources which contains SQL file with database sources (tables and relations for clients, classes etc). 
Any comments in sources are welcome.
Do not hesitance ask any questions about this task.
