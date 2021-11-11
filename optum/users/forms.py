from django.forms import ModelForm
from django.contrib.auth.forms import UserCreationForm
from .models import  MyUser
from django import forms
from django.contrib.auth.models import User


class CreateUserForm(UserCreationForm):
    class Meta:
        model=MyUser
        fields=('username','first_name','last_name','email','phone','password1','password2')
        


