# Project: Food Order

1. Setup AWS infrastructure including VPC with public and private subnets, launched bastion and private host for providing security where I pull the code from Github. Setup RDS instanvce for database storage.

2. Setup the ECR and pushed the images on it manually.

3. Created ECS cluster with EC2 instance & write Task defination with container details in it.

4.  Created Dockerfile for building docker images.

5. Setup CodePipeline with github configuration , created buildspec.yml file and automate the push on ECR

6. Configure Application Load Balancer to access the application.

7. Service is deployed manually with the ecs.

8. the pipeline was successfully build but failed to deployed on AWS.


http://techgenie-ecs-task-1705047770.us-east-2.elb.amazonaws.com
