# ToDoList Task
* Name of the task: To Do List
* Estimated No of Hours: 40
* Actual Time Spent:  25

# Notes:
	to run the program
	a. download and install XAMPP (https://www.apachefriends.org/download.html)
	b. run XAMPP and Start apache/sql
	c. place App folder in "C:\xampp\htdocs"
	d. create "todolistdb" databases in mySQL along with the tables users, tasks (See below for SQL Code)
	e. Open your preferred web browser and visit "localhost/ToDoList"

# Issues:
	a. DATE variable in the Create Task Form causes an issue when not picked (typed)
	b. Updating a task does not show until user refreshes index or browses a bit


# Structure
Runs on XAAMP (using apache, mysql, php)

## SQL Tables:
(I named the database "todolistdb", for the code to work right away match this name otherwise you'll have to look through the code and match the variable to your db)

1. users
CREATE TABLE `users` (
 `ID` int(100) NOT NULL AUTO_INCREMENT,
 `username` varchar(12) NOT NULL,
 `password` varchar(16) NOT NULL,
 PRIMARY KEY (`ID`),
 UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1

2. tasks (SQL Query)
CREATE TABLE `tasks` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `usernm` varchar(12) NOT NULL,
 `task` text NOT NULL,
 `taskstatus` varchar(12) NOT NULL DEFAULT 'Not Started',
 `task_due` date NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1

3.  

# Test Cases
	a. User doesn't input username or password upon registration
	b. User doesn't input Task or Due date upon creation
	c.
