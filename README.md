Purpose:  
Docker based LAMP Framework  

How to set it up  
1. Clone Git repository  
Description: It is recommended to use a dedicated user for running this app. Let's assume this app is being installed under user "priority". Let home directory for this user be "/home/priority".  
Clone repository using commands similar to:  
cd ~  
git clone https://github.com/kuldeeparyadotcom/Priority.git  

2. Navigate to Priority directory and set up app.Assuming docker is installed and running on machine.  
If not, follow Docker installation documentation https://docs.docker.com/engine/installation/  

Execute scripts buildDockerImage and startPriority using commands similar to:  
cd ~/Priority  
sudo ./buildDockerImage  
./startPriority  

Script buildDockerImage creates Docker image on your machine.  
Script startPriority starts docker containers required for this app.  

3. Access Priority on port 49001(Assuming port 49001 is open for incoming traffic on the machine)  
http://yourserver:49001/  

4. How to stop Priority app.  
cd ~/Priority  
./stopPriority

Please Note:  
Just for the sake of demontration MySQL datadir is checked in to GitHub.  
In real usage scenario, datadir should not be checked in code repository.  
To do so, update .gitignore accordinly.  


Thank You!  
