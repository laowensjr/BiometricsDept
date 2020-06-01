# Coding Challenge
This is the coding challenge given to me by Vanderbilt's Biometrics Dept
#
#
# This repo contains PHP files and a Python Script(biometricsPythonSPyder.py). 
Explanation of both are as follows:

# PHP
The PHP code retrieves the Repository ID, Name, Number of Stars, GitHub URL, Created Date, Last Push Date, and Description of 25 of the most starred Python Projects.
A live view can be seen at => https://datalyticsbi.com/star-repos/index2.php, I used Bootstrap for the webpage's layout.

PHP's curl method was used to communicate with Github's API. There were other PHP wrappers out there you could use to connect to Github's API but what's the challenge in that, so I decided to create a new way to access the API via PHP Curl. It was a success!

Each time the page (https://datalyticsbi.com/star-repos/index2.php) loads it not only retrieves the Most Starred Python Projects, it also Updates the SQL database with the most up to date Starred Python Projects. Below the list of the 30 Most Starred Python Projects the Update status is printed, on the same page.
 
Also On the page is listed a link named "Details". If you click on the link it will take you to an Interface (https://datalyticsbi.com/star-repos/repoView.php) that communicates with Github's API to retrieve additional information regarding the Starred Repository.

This Github Repo also contains the SQL code I used to create the SQL database.
Addtionally it contains a Database class and a Personal Access token Class named "PAT"
The database class contains the credentials to connect to the database and the PAT class contains my credentials to connect to Github's API.

**In order to communicate with Github's API you will need a Personal Access Token, SEE =>https://help.github.com/en/github/authenticating-to-github/creating-a-personal-access-token-for-the-command-line 


# PYTHON SCRIPT

The Python script I created will retrieve the Names and Repository IDs of the Most Starred Python projects via Github's API.

Then the script will retrieve the Names and Repository IDs of the Most Starred Python projects that are stored in the SQL Database.
They Both should match if the Database is truly being updated properly.
