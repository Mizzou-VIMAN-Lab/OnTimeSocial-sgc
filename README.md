HumHub - Social Network Kit
===========================

[![Build Status](https://travis-ci.org/humhub/humhub.svg?branch=master)](https://travis-ci.org/humhub/humhub)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

HumHub is a feature rich and highly flexible OpenSource Social Network Kit written in PHP.

It's perfect for individual:
- Social Intranets
- Enterprise Social Networks
- Private Social Networks

More information:
- [Homepage & Demo](http://www.humhub.org)
- [Documentation & Class Reference](http://docs.humhub.org)
- [Licence](http://www.humhub.org/licences)

# Running the customized HumHub Portal using Docker
The following steps will automate the installation of the Portal on your machine. 

Download Docker by downloading and running shell script available at: https://s3.amazonaws.com/ontimesocial-humhub/dockerinstall.sh

The shell script downloads Docker, pulls the HumHub docker image from DockerHub (https://hub.docker.com/r/saisn67/vsocial/) and runs it. 

You can view the portal at: "https://ip-address/humhub". 

Login with username: saisn.67 and password: 123456. (You can create or update username/password)

# Our customization, on top of HumHub social portal's regular features, include: 
- Rewards page: To keep track of the progress of each student during a session
- Session Tracking: Allows the instructor to create a session, invite students and allows the instructor to set the rewards of each student and to monitor the EEG-converted-to-emotions levels of each student during the session.

--------------------------------------------------------------------------------------------

# Writing and Visualizing Simulated EEG Data on DynamoDB
Follow the following steps to simulate EEG data for 5 users, write it into a dynamodb table called "myDB" and visualize it on the web server

Assumption: You already have an AWS account created and you have your access key ID and access secret stored securely on your system. To understand how to create your access Key ID/secret pair, follow the steps in manual available at: https://s3.amazonaws.com/ontimesocial-humhub/Manual+to+setup+AWS+.pdf

1. Download https://s3.amazonaws.com/ontimesocial-humhub/runthis.tar.gz  
2. unzip with tar -xzvf runthis.tar.gz. 
3. Edit runthis1.sh and runthis2.sh to include your Access Key Id and Access Secret. 
4. Run runthis1.sh in one terminal and runthis2.sh on the second terminal. 

Open your browser and go to "ipaddress:8080" to view the visualization of simulated EEG data for 5 users. 

To change the number of users:
a) Open visualApp/src/main/java/org/example/basicApp/ddb/DynamoDBWriter.java

b) Line 70, change numUsers=5 to 10,15 ...etc.

# To view EEG visualization at the EEG tab on the portal, include the system's ipaddress in the index.php located at: ~/humhub/protected/humhub/modules/session/views/eeg/index.php . 
---------------------------------------------------------------------------------------------

Thank you for coming to this project and in case of any issues, comments or suggestions, please contact Sai Nuguri at saisn.67@gmail.com, Songjie Wang at wangso@missouri.edu or Dr. Prasad Calyam at calyamp@missouri.edu.


