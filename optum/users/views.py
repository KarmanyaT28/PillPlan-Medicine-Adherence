
from django.http.response import HttpResponse
from django.shortcuts import render , redirect
from django.forms import inlineformset_factory
from django.views.generic import ListView , DetailView , CreateView , DeleteView
from django.views.generic.edit import UpdateView
from .models import *
# from django.contrib.auth.forms import UserCreationForm
from .forms import CreateUserForm
from django.contrib import messages
from django.contrib.auth import authenticate,login,logout
from django.contrib.auth.decorators import login_required
# from .models import Pill
# from .forms import PillForm
from django.urls import reverse_lazy
from django.contrib.auth.mixins import LoginRequiredMixin

import joblib


def landing(request):
    return render(request,'users/landing.html')

def about(request):
    return render(request,'users/about.html')

def contact(request):
    return render(request,'users/contact.html')


def registerpage(request):
    if request.user.is_authenticated:
        return redirect('dashboard')

    else:
        form = CreateUserForm()

        if request.method=='POST':
            form = CreateUserForm(request.POST)
            if form.is_valid():
                form.save()
                user=form.cleaned_data.get('username')
                messages.success(request,'Account created successfully for' + user)
                return redirect('login')


        context={'form':form}
        return render(request,'users/register.html',context)




def loginpage(request):
    


    if request.user.is_authenticated:
        
        return redirect('dashboard')

    else:
        if request.method =='POST':
            username = request.POST.get('username')
            password = request.POST.get('password')


            user = authenticate(request,username=username,password=password)

            if user is not None:
                login(request,user)
                return redirect('dashboard')

            else:
                messages.info(request,'Username or Password is incorrect')
            

        context={}
        return render(request,'users/login.html',context)



def logoutUser(request):
    logout(request)
    return redirect('landing')


@login_required(login_url = 'login')
def dashboard(request):
    return render(request,'users/dashboard.html')


@login_required(login_url = 'login')
def profile(request):
    return render(request,'users/profile.html')


@login_required(login_url = 'login')
def foodrecom(request):
    # form = show_entry_fields()
    return render(request,'users/foodrecom.html',{'form':form})

@login_required(login_url = 'login')
def result(request):
    classifier = joblib.load("D:/django/Optum-Stratethon/finalized_usertype.sav")
    lis = []

    lis.append(request.GET['q1'])
    lis.append(request.GET['q2'])
    lis.append(request.GET['q3'])
    lis.append(request.GET['q4'])
    lis.append(request.GET['q5'])
    lis.append(request.GET['q6'])
    lis.append(request.GET['q7'])
    lis.append(request.GET['q8'])
    lis.append(request.GET['q9'])
    lis.append(request.GET['q10'])


    print(lis)

    ans = classifier.predict([lis])

    return render(request,'users/result.html',{'ans':ans})



@login_required(login_url = 'login')
def gettype(request):
    return render(request,'users/gettype.html')



#----------------------------------------------------------------------------------------



@login_required(login_url = 'login')
def bmi(request):
    return render(request,'users/bmi.html')


import numpy as np






@login_required(login_url = 'login')
def bmiresult(request):


    clsf = joblib.load("D:/django/Optum-Stratethon/bmi.sav")
    # lis = []

    # lis.append(request.GET['height'])
    # lis.append(request.GET['weight'])
    # lis.append(request.GET['gender'])


    # ans = clsf.predict([lis])

    # return render(request,'users/bmiresult.html',{'ans':ans})
    if request.method == 'POST':
        
        a1 = float(request.POST['height'])
        a2 = float(request.POST['weight'])
        a3 = float(request.POST['gender'])

        list1=[[a1,a2,a3]]
        prediction = clsf.predict(list1)

    output = prediction[0]
    t1='Result: Extremely Weak'
    t2='Result: Weak'
    t3='Result: Normal'
    t4='Result: Overweight'
    t5='Result: Obesity'
    t6='Result: Extreme Obesity'
    t7='Can\'t Predict'
    if(output==0):
        return render(request,'users/bmi_result.html', {'prediction_text':t1})
    elif(output==1):
        return render(request,'users/bmi_result.html',  {'prediction_text':t2})
    elif(output==2):
        return render(request,'users/bmi_result.html',  {'prediction_text':t3})
    elif(output==3):
        return render(request,'users/bmi_result.html',  {'prediction_text':t4})
    elif(output==4):
        return render(request,'users/bmi_result.html',  {'prediction_text':t5})
    elif(output==5):
        return render(request,'users/bmi_result.html',  {'prediction_text':t6})
    else:
        return render(request,'users/bmi_result.html',  {'prediction_text':t7})
    






# @login_required(login_url = 'login')
# def medicineList(request):
#     return render(request,'users/medicinelist.html')


class TaskList(LoginRequiredMixin,ListView):
    model = Medicine
    context_object_name = 'medicines'
    template_name = "users/Medicines/medicinelist.html"
    


    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['medicines'] = context['medicines'].filter(user=self.request.user)
        context['count'] = context['medicines'].filter(complete=False).count()
        return context





class TaskDetail(LoginRequiredMixin,DetailView):
    model = Medicine
    context_object_name = 'medicine'
    template_name = "users/Medicines/medicinedetail.html"


class TaskCreate(LoginRequiredMixin,CreateView):
    model = Medicine
    fields = ['title','description','complete','drug_type','drug_qty','start_date','end_date','drug_frequency','upload','man_date','exp_date','drug_comments']
    template_name = "users/Medicines/medicineform.html"
    success_url = reverse_lazy('medicines')


    def form_valid(self,form):
        form.instance.user = self.request.user
        return super(TaskCreate,self).form_valid(form)
    

class TaskUpdate(LoginRequiredMixin,UpdateView):
    model=Medicine
    fields = ['title','description','complete']
    template_name = "users/Medicines/medicineform.html"
    success_url = reverse_lazy('medicines')


class TaskDelete(LoginRequiredMixin,DeleteView):
    model=Medicine
    context_object_name = 'medicine'
    template_name = "users/Medicines/medicine_confirm_delete.html"
    success_url = reverse_lazy('medicines')



# ------------------------------------------------------------------------------------------------------------

# @login_required(login_url = 'login')

