from django.forms import ModelForm
from django.contrib.auth.forms import UserCreationForm
from .models import Pill
from django import forms
from django.contrib.auth.models import User


class CreateUserForm(UserCreationForm):
    class Meta:
        model=User
        fields=['username','first_name','last_name','email','password1','password2']



class PillForm(forms.ModelForm):
    class Meta:
        model = Pill
        fields = ('title','author','body') 


        # widget = {
        #     'title':form.TextInput(Attrs={'class' : 'form-control'}),
        #     'author':form.Select(Attrs={'class' : 'form-control'}),
        #     'body':form.Textarea(Attrs={'class' : 'form-control'})

        # }