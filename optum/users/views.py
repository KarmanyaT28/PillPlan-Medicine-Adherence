from django.shortcuts import render , redirect
from django.forms import inlineformset_factory
from django.views.generic import ListView , DetailView , CreateView , DeleteView
from .models import *
# from django.contrib.auth.forms import UserCreationForm
from .forms import CreateUserForm
from django.contrib import messages
from django.contrib.auth import authenticate,login,logout
from django.contrib.auth.decorators import login_required
from .models import Pill
from .forms import PillForm
from django.urls import reverse_lazy


def landing(request):
    return render(request,'users/landing.html')

def about(request):
    return render(request,'users/about.html')

def contact(request):
    return render(request,'users/contact.html')

# def landing(request):
#     return render(request,'users/landing.html')


class HomeView(ListView):
    model = Pill
    template_name = 'users/pills.html'
    ordering = ['-drugpublish_date']


class PillsDetailView(DetailView):
    model = Pill
    template_name = 'users/pills_details.html'


class AddPillView(CreateView):
    model = Pill
    form_class = PillForm
    template_name = 'users/add_pill.html'
    # fields = '__all__'


class DeletePillView(DeleteView):
    model = Pill
    template_name = 'users/deletepill.html'
    success_url = reverse_lazy('pills')

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
    return redirect('login')


@login_required(login_url = 'login')
def dashboard(request):
    return render(request,'users/dashboard.html')


@login_required(login_url = 'login')
def profile(request):
    return render(request,'users/profile.html')



@login_required(login_url = 'login')
def foodrecom(request):
    return render(request,'users/foodrecom.html')




# ------------------------------------------------------------------------------------------------------------

# @login_required(login_url = 'login')

