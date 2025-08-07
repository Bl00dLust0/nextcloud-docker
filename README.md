Title: Deployment of Multiple Nextcloud Instances Using Docker, NGINX Reverse Proxy, MySQL, and S3 Storage

Objective:
To deploy two separate Nextcloud instances using Docker containers, each with its own MySQL database, and configure NGINX as a reverse proxy to expose both instances over custom domains. S3 storage integration is used for scalable external file storage per client.

1. Technologies Used:

    Docker & Docker Compose
    
    Nextcloud (Official Image)
    
    MySQL (v5.7)
    
    NGINX (Reverse Proxy)
    
    S3-compatible storage (e.g., MinIO, AWS S3)
    
    Ubuntu as Host OS

2. Project structure
       nextcloud-docker/
          docker-compose.yml
          data/
              nextcloud1/
              nextcloud2/
              nextcloud3/
          mysql-init/
              init.sql
          nginx/
              conf.d/
                   nextcloud1.conf
                   nextcloud2.conf
                   nextcloud3.conf

 4. MySQL Setup:

      One MySQL container is shared between the two Nextcloud instances.
      
      Environment variables set only for root password.
      
      A custom init.sql script is mounted to create two databases and users

 5. Docker Compose Configuration:
      Each Nextcloud container uses a separate volume to ensure isolated configuration and data.

 6. NGINX Reverse Proxy Configurations:
      Each domain is proxied to the correct container.
        server {
      listen 80;
      server_name nextcloud1.anantgadaili.com.np;
  
      location / {
          proxy_pass http://nextcloud1:80;
          proxy_set_header Host $host;
          proxy_set_header X-Real-IP $remote_addr;
          }
      }
    
 7. S3 External Storage Configuration:
     > Enabled external storage app in Nextcloud UI.
     > Added S3 credentials and endpoint per instance.
     > Ensured config.php contains:

      'objectstore' => array(
    'class' => '\OC\Files\ObjectStore\S3',
    'arguments' => array(
      'bucket' => 'nextcloud-bucket1',
      'key'    => 'your-access-key',
      'secret' => 'your-secret-key',
      'hostname' => 's3.example.com',
      'port' => 443,
      'use_ssl' => true,
      'region' => 'us-east-1',
       ),
     ),

8. Troubleshooting Notes:
   > Ensure separate volumes: mounting empty folders overwrites the container's default app.
   > If config.php is missing, likely the volume was mounted before initialization.
   > Use different instanceid for each container to prevent cache/session collision.
   > Use docker exec -it nextcloudX bash to inspect container file structure.

9. Final Result:

   >  Each Nextcloud instances are reachable via:
      
      http://nextcloud1.anantgadaili.com.np
      
      http://nextcloud2.anantgadaili.com.np

      http://nextcloud3.anantgadaili.com.np
      
   >  Each instance has its own DB, config, and S3 storage.
      
   >  NGINX reverse proxy directs traffic based on domain name.
