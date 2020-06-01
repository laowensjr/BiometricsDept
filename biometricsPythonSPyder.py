import requests
import json
import mysql.connector



#response =requests.get("https://api.github.com/search/repositories?q=language:python&stars:>1&sort=stars&order=desc&format=json")
response =requests.get("https://api.github.com/search/repositories?q=language:python&format=json")
toprepos = json.loads(response.text)

  
i=0   

while i==0 or i<30:
    
    #Printing the Names and IDs from Most starred Python Repos retrieved via Githubs API 
    print('Repo Name: ', {toprepos['items'][i]['name']} , '| ID: ', {toprepos['items'][i]['id']})
    i+=1  

print('')
print('Retrieving Names(Data) from DB\n')

#dbconn = mysql.connector.connect(host= '[162.241.217.171:3306]', user='[datalyt6_lawpyt]', password='[Lo19315761$]',  database = '[datalyt6_starred_repos]')
dbconn = mysql.connector.connect(
    host = '162.241.217.171',
    user = 'datalyt6',    
    password = 'Lo19315761$',
    database = 'datalyt6_starred_repos'
)

pointer = dbconn.cursor()
pointer.execute("SELECT name, RepositoryID FROM Repository")
result = pointer.fetchall()

for x in result:
    print('DB Repo Name: ', x[0], '| ID: ', x[1])    