 C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:entity

 Class name of the entity to create or update (e.g. DeliciousElephant):
 > Smartphone

 Add the ability to broadcast entity updates using Symfony UX Turbo? (yes/no) [no]:
 > 

 created: src/Entity/Smartphone.php
 created: src/Repository/SmartphoneRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 Netype  erty name (press <return> to stop adding fields):
 > 
 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > memory

 Field type (enter ? to see all types) [string]:
 > integer

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > color

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > description

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > picture

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > price

 Field type (enter ? to see all types) [string]:
 > decimal

 Precision (total number of digits stored: 100.00 would be 5) [10]:
 > 7

 Scale (number of decimals to store: 100.00 would be 2) [0]:
 > 2

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Smartphone.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > 


           
  Success! 
           

 Next: When you're ready, create a migration with symfony.exe console make:migration
 
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:entity

 Class name of the entity to create or update (e.g. TinyElephant):
 > Vendor

 Add the ability to broadcast entity updates using Symfony UX Turbo? (yes/no) [no]:
 > 

 created: src/Entity/Vendor.php
 created: src/Repository/VendorRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > name

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 

 updated: src/Entity/Vendor.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > 


           
  Success! 
           

 Next: When you're ready, create a migration with symfony.exe console make:migration
 
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:entity

 Class name of the entity to create or update (e.g. GrumpyPizza):
 > Smartphone

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > vendor

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Vendor

What type of relationship is this?
 ------------ ------------------------------------------------------------------------- 
  Type         Description                                                              
 ------------ ------------------------------------------------------------------------- 
  ManyToOne    Each Smartphone relates to (has) one Vendor.                             
               Each Vendor can relate to (can have) many Smartphone objects.            
                                                                                        
  OneToMany    Each Smartphone can relate to (can have) many Vendor objects.            
               Each Vendor relates to (has) one Smartphone.                             
                                                                                        
  ManyToMany   Each Smartphone can relate to (can have) many Vendor objects.            
               Each Vendor can also relate to (can also have) many Smartphone objects.  
                                                                                        
  OneToOne     Each Smartphone relates to (has) exactly one Vendor.                     
               Each Vendor also relates to (has) exactly one Smartphone.                
 ------------ ------------------------------------------------------------------------- 

 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > ManyToOne

 Is the Smartphone.vendor property allowed to be null (nullable)? (yes/no) [yes]:
 > no

 Do you want to add a new property to Vendor so that you can access/update Smartphone objects from it - e.g. $vendor->getSmartphones()? (yes/no) [yes]:
 > yes

 A new property will also be added to the Vendor class so that you can access the related Smartphone objects from it.

 New field name inside Vendor [smartphones]:
 > 

 Do you want to activate orphanRemoval on your relationship?
 A Smartphone is "orphaned" when it is removed from its related Vendor.
 e.g. $vendor->removeSmartphone($smartphone)
 
 NOTE: If a Smartphone may *change* from one Vendor to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Smartphone objects (orphanRemoval)? (yes/no) [no]:
 > yes

 updated: src/Entity/Smartphone.php
 updated: src/Entity/Vendor.php

 Add another property? Enter the property name (or press <return> to stop adding fields):
 > 


           
  Success! 
           

 Next: When you're ready, create a migration with symfony.exe console make:migration
 
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:migration

In ExceptionConverter.php line 101:
                                                                                        
  An exception occurred in the driver: SQLSTATE[HY000] [1049] Unknown database 'oefen'  
                                                                                        

In Exception.php line 24:
                                                   
  SQLSTATE[HY000] [1049] Unknown database 'oefen'  
                                                   

In Driver.php line 33:
                                                   
  SQLSTATE[HY000] [1049] Unknown database 'oefen'  
                                                   

make:migration [--formatted] [--configuration [CONFIGURATION]]

PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:migration
 created: migrations/Version20260503112240.php

           
  Success! 
           

 Review the new migration then run it with symfony.exe console doctrine:migrations:migrate
 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console doctrine:migrations:migrate

 WARNING! You are about to execute a migration in database "oefen" that could result in schema changes and data loss. Are you sure you wish to continue? (yes/no) [yes]:
 > 

[notice] Migrating up to DoctrineMigrations\Version20260503112240
[notice] finished in 209.5ms, used 22M memory, 1 migrations executed, 4 sql queries
                                                                                                                        
 [OK] Successfully migrated to version: DoctrineMigrations\Version20260503112240                                        
                                                                                                                        


PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:controller

 Choose a name for your controller class (e.g. BravePuppyController):
 > SmartphoneController

 Do you want to generate PHPUnit tests? [Experimental] (yes/no) [no]:
 > 

 created: src/Controller/SmartphoneController.php
 created: templates/smartphone/index.html.twig

           
  Success! 
           

 Next: Open your new controller class and add some pages!
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> symfony console make:form

 The name of the form class (e.g. AgreeablePuppyType):
 > SmartphoneType

 The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
 > Smartphone

 created: src/Form/SmartphoneType.php

           
  Success! 
           

 Next: Add fields to your form and start using it.
 Find the documentation at https://symfony.com/doc/current/forms.html
PS C:\Users\Gebruiker\Downloads\sd24-php-p05-symfony-oefen-Ama080-main\sd24-php-p05-symfony-oefen-Ama080-main> 
