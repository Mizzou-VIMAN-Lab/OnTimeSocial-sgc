Hello! 

This repository is for OnTimeSocial, a portal built on HumHub (https://www.humhub.org/en), customized for a VR Learning Environment (VRLE). 

The  testbed for evaluating  features  of  OnTimeSocial  is  based  on  vSocial,  a  Virtual  Reality  Learning  Environment  for  children with Autism. vSocial is a virtual reality learning environment(VRLE) built over a high-speed network and it promotes educational effectiveness and efficiency via the creation of flexible content and infrastructure which meet established standards with improved immersion. The syllabus  for  the  VR  sessions is based on standards set by a previous version, a virtual learning environment(VLE), iSocial. vSocial allows for students and instructor to remotely login  into  the  VR  world, which is run by a Cloud server run on GENI, (https://portal.geni.net/). The same cloud server also controls the social portal, OnTimeSocial portal, as shown in the picture below. The customized OnTimeSocial portal allows instructors to keep schedule and monitor VR sessions as well as monitor the emotional states of the students while in the VR session. Each student wears an EEG headband, like Muse, and the raw EEG data collected by the headbands is analyzed and broken down into emotions, such as, Stress, Relaxation, Focus, Engagement and Excitement, saved on DynamoDB and displayed on the portal for the instructors to monitor.   

![Image of OnTimeSocial-vSocial integration](https://s3.amazonaws.com/ontimesocial-humhub/Architecture-modified.PNG)


# Running the customized HumHub Portal using Docker
The following steps will automate the installation of the Portal on your machine. 

Download Docker by downloading and running shell script available at: https://s3.amazonaws.com/ontimesocial-humhub/dockerinstall.sh

The shell script downloads Docker, pulls the HumHub docker image from DockerHub (https://hub.docker.com/r/saisn67/vsocial/) by running the command, "docker pull vsocial" and runs it. The Docker image has Apache, MySql, and PHP7.0 installed.

Once pulled, the above dockerinstall.sh script runs the following command to run the Docker image and logs the user as "root".
"docker run -it -p 80:80 saisn67/vsocial" 

Once logged in as root, run the following commands in the terminal to make sure MySql and Apache2 are up and running.

service apache2 start

service mysql start

You can view the portal at: "https://ip-address/humhub". 

Login with username: saisn.67 and password: 123456. (You can create or update username/password)

# Our customization, on top of HumHub social portal's regular features, include: 
- Rewards page: To keep track of the progress of each student during a session
- Session Tracking: Allows the instructor to create a session, invite students and allows the instructor to set the rewards of each student and to monitor the EEG-converted-to-emotions levels of each student during the session.

--------------------------------------------------------------------------------------------

# Writing and Visualizing Simulated EEG Data on DynamoDB
Follow the following steps to simulate EEG data for 5 users, write it into a dynamodb table called "myDB" and visualize it on the web server.

Assumption: You already have an AWS account created and you have your access key ID and access secret stored securely on your system. To understand how to create your access Key ID/secret pair, follow the steps in manual available at: https://s3.amazonaws.com/ontimesocial-humhub/Manual+to+setup+AWS+.pdf

1. Download https://s3.amazonaws.com/ontimesocial-humhub/runthis.tar.gz  
2. unzip with tar -xzvf runthis.tar.gz. 
3. Edit runthis1.sh and runthis2.sh to include your Access Key Id and Access Secret. 
4. Run runthis1.sh in one terminal and runthis2.sh in a second terminal. 

Open your browser and go to "ipaddress:8080" to view the visualization of simulated EEG data for 5 users. 

To change the number of users:

a) Open visualApp/src/main/java/org/example/basicApp/ddb/DynamoDBWriter.java

b) Line 70, change numUsers=5 to 10,15 ...etc.

To view EEG visualization at the EEG tab on the portal, include the system's ipaddress in the index.php located at: ~/humhub/protected/humhub/modules/session/views/eeg/index.php . 
---------------------------------------------------------------------------------------------

Demo Videos for multiple users are available in the following YouTube playlist.

YouTube video link: https://www.youtube.com/playlist?list=PLUhZRvCeIxED7kH65JUh9saWhUUEyzjYE
-----------------------------------------------------------------------------

Thank you for coming to this project and in case of any issues, comments or suggestions, please contact Sai Nuguri at saisn.67@gmail.com, Songjie Wang at wangso@missouri.edu or Dr. Prasad Calyam at calyamp@missouri.edu.


