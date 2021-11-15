from django.db import models
from django.contrib.auth.models import User
from django.db.models.expressions import Value
from django.db.models.fields.related import ForeignKey
from django.utils.translation import gettext_lazy
from django.utils import timezone
from django.urls import reverse
from datetime import datetime, date
from django.contrib.auth.models import AbstractBaseUser , BaseUserManager




class MyUserManager(BaseUserManager):
    def create_user(self,username,email,first_name,last_name,phone,password=None):
        if not username:
            raise ValueError("Username is required")

        if not email:
            raise ValueError("Email is required")

        if not first_name:
            raise ValueError("First Name is required")

        if not last_name:
            raise ValueError("Last Name is required")

        if not phone:
            raise ValueError("Valid Phone Number is required")


        user=self.model(
            username=username,
            email=self.normalize_email(email),
            first_name = first_name,
            last_name = last_name,
            phone=phone

        )

        user.set_password(password)
        user.save(using =self._db)
        return user


    def create_superuser(self,username,email,first_name,last_name,phone,password=None):
        user = self.create_user(
            username=username,
            email = email,
            first_name = first_name,
            last_name = last_name,
            phone=phone,
            password=password
        )
        user.is_staff = True
        user.is_admin = True
        user.is_superuser = True
        user.save(using=self._db)
        return user



class MyUser(AbstractBaseUser):
    username = models.CharField(verbose_name="Username" , max_length=50,unique=True, blank=True, null=True)
    email = models.EmailField(verbose_name="email address", max_length=60 , unique=True)
    first_name = models.CharField(verbose_name='first name' , max_length=200,blank=True)
    last_name = models.CharField(verbose_name='last name' , max_length=200,blank=True)
    phone= models.CharField(max_length=20,verbose_name="contact number")
    date_joined = models.DateTimeField(verbose_name="date joined",auto_now_add=True)
    age = models.IntegerField(verbose_name='age',null=True, blank=True)
    gender = models.CharField(verbose_name='gender' , max_length=15,blank=True,null=True)
    emergency_name = models.CharField(verbose_name='emergency contact name' , max_length=200,blank=True,null=True)
    emergency_email= models.EmailField(verbose_name='emergency email address' ,max_length=60,unique=True,null=True)
    user_type = models.CharField(verbose_name='User Type', max_length = 50, default='Type A')
    user_points = models.IntegerField(verbose_name='age',null=True, blank=True)
    filled_status = models.BooleanField(default=False)
    is_admin = models.BooleanField(default=False)
    is_active = models.BooleanField(default=True)
    is_staff = models.BooleanField(default=False)
    is_superuser = models.BooleanField(default = False)




    USERNAME_FIELD = 'username'
    REQUIRED_FIELDS = ['first_name','last_name','phone','email']
    objects = MyUserManager()
    

    def __str__(self):
        return self.first_name + ' | ' + (self.last_name)


    def has_perm(self,perm,obj=None):
        return True

    def has_module_perms(self,app_label):
        return True

    



# class Pillset():
#     pill_user_id= models.IntegerField(verbose_name='PillUserId',primary_key=True,unique=True)#auto-Incr #forKey=userid
#     drug_name = models.CharField(verbose_name='drug name' , max_length=200)
#     drug_type = models.CharField(verbose_name='durg type' , max_length=50)
#     drug_qty = models.IntegerField(verbose_name='drug qty' , null=True,blank=True) # Jo user ko leni hai for a particular time
#     drug_time = models.CharField()
#     drug_start_date = models.DateTimeField(default=timezone.now)
#     drug_frequency/day
#     drug_end_date = models.DateTimeField()
#     drug_image = models.ImageField()
#     # drug_REM
#     # drugperrefill
#     # reqtype=bool
#     # mandate
#     # expalert =bool
#     # drugcomments




        
class Medicine(models.Model):
    user = models.ForeignKey(MyUser,on_delete = models.CASCADE,null=True, blank=True)
    title = models.CharField(max_length=200)
    description = models.TextField(null=True,blank=True)
    complete = models.BooleanField(default=False)
    posted = models.DateTimeField(auto_now_add=True)


    drug_type = models.CharField(verbose_name='drug type' , max_length=50, null=True,blank=True)
    drug_qty = models.IntegerField(verbose_name='drug qty' , null=True,blank=True)
    start_date = models.DateTimeField(default=timezone.now, null=True)
    end_date = models.DateTimeField(default=timezone.now, null=True)
    drug_frequency = models.IntegerField(verbose_name='drug_frequency' , null=True,blank=True)
    upload = models.ImageField(upload_to ='uploads/',null=True,blank=True)
    man_date = models.DateField(verbose_name='manufacturing date',null=True)
    exp_date = models.DateField(verbose_name='expiry date',null=True)
    drug_comments = models.TextField(verbose_name ='drug comments' ,max_length=200,null=True,blank=True)
    
    # drug_REM
    # drugperrefill
    # reqtype=bool
    






    def __str__(self):
        return self.title


    class Meta:
        ordering=['complete']



