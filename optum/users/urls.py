from django.contrib import admin
from django.urls import path
from . import views
from .views import AddPillView, HomeView , PillsDetailView , DeletePillView



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
    # path('pills/', views.pills,name='foodrecom'),
    path('pills/',HomeView.as_view(),name='pills'),
    path('pillsdetail/<int:pk>',PillsDetailView.as_view(),name='pillsdetail'),
    path('add_pill/',AddPillView.as_view(),name='add_pill'),
    path('pillsdetail/<int:pk>/delete',DeletePillView.as_view(),name='delete_pill'),
]
