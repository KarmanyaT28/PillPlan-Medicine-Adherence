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
    return render(request,'users/foodrecom.html')


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
    fields = ['title','description','complete']
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

