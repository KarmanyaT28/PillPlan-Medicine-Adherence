from django.db import models
from django.contrib.auth.models import User
from django.db.models.fields.related import ForeignKey
from django.utils.translation import gettext_lazy
from django.utils import timezone
from django.urls import reverse
from datetime import datetime, date





# class UserManager(BaseUserManager):
#     def create_superuser(self,email,username,first_name,last_name,age,gender,password,**other_fields):

#         other_fields.setdefault('is_staff',True)
#         other_fields.setdefault('is_superuser',True)
#         other_fields.setdefault('is_active',True)


#         if other_fields.get('is_staff') is not True:
#             raise ValueError('Superuser must be assigned to is_staff=True.')

#         if other_fields.get('is_superuser') is not True:
#             raise ValueError('Superuser must be assigned to is_superuser=True.')

#         return self.create_user(email,username,first_name,last_name,age,gender,password,**other_fields)

#     def create_user(self,email,username,first_name,last_name,age,gender,password,**other_fields):
#         if not email:
#             raise ValueError(gettext_lazy('You must provide an email address'))

        


#         email = self.normalize_email(email)
#         user = self.model(email=email,username=username,first_name=first_name,last_name=last_name,age=age,gender=gender, **other_fields)
#         user.set_password(password)
#         user.save()
#         return user


    

# class User(AbstractBaseUser , PermissionsMixin):
#     username = models.CharField(max_length=150,unique=True,default='Username')
#     userid = models.IntegerField(verbose_name='UserId',primary_key=True)
#     age = models.IntegerField(verbose_name='age',null=True, blank=True)
#     email = models.EmailField(gettext_lazy('email address') , unique=True)
#     first_name = models.CharField(verbose_name='first name' , max_length=200,blank=True)
#     last_name = models.CharField(verbose_name='last name' , max_length=200,blank=True)
#     gender = models.CharField(verbose_name='gender' , max_length=15)
#     password = models.CharField(max_length=50)
#     emergency_name = models.CharField(verbose_name='emergency contact name' , max_length=200)
#     emergency_email= models.EmailField(verbose_name='emergency email address' ,max_length=60)
#     user_type = models.CharField(verbose_name='User Type', max_length = 50, default='Type A')
#     filled_status = models.BooleanField(default=False)
#     is_staff = models.BooleanField(default=False)
#     is_active = models.BooleanField(default=False)

#     objects= UserManager()

#     USERNAME_FIELD = 'email'
#     REQUIRED_FIELDS = ['username','first_name','last_name','age','gender']
#     def __str__(self):
#         return self.username


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


        


class Pill(models.Model):
    title = models.CharField(max_length=255)
    author = models.ForeignKey(User,on_delete= models.CASCADE)
    body = models.TextField()
    drugpublish_date = models.DateField(auto_now_add=True)


    def __str__(self):
        return self.title + ' | ' + str(self.author)


    def get_absolute_url(self):
        return reverse('pillsdetail' , args=(str(self.id)))


    
 
