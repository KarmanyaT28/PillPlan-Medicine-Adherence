from django.contrib import admin
from django.urls import path
from . import views
from .views import TaskList , TaskDetail , TaskCreate, TaskUpdate , TaskDelete

urlpatterns = [
    path('', views.landing,name='landing'),
    path('about/', views.about,name='about'),
    path('contact/', views.contact,name='contact'),
    path('register/', views.registerpage,name='register'),
    path('login/', views.loginpage,name='login'),
    path('logout/', views.logoutUser,name='logout'),
    path('dashboard/', views.dashboard,name='dashboard'),
    path('profile/', views.profile,name='profile'),
    path('foodrecom/', views.foodrecom,name='foodrecom'),
    path('result/', views.result,name='result'),
    path('bmi/', views.bmi,name='bmi'),
    path('bmiresult/', views.bmiresult,name='bmiresult'),
    path('gettype/', views.gettype,name='gettype'),    
    path('medicine/', TaskList.as_view(),name='medicines'),
    path('medicine/<int:pk>/', TaskDetail.as_view(),name='medicine'),
    path('medicine-edit/<int:pk>/', TaskUpdate.as_view(),name='medicine-edit'),
    path('medicine-delete/<int:pk>/', TaskDelete.as_view(),name='medicine-delete'),
    path('medicine-create/',TaskCreate.as_view(),name='medicine-create'),
    
    
   
]
