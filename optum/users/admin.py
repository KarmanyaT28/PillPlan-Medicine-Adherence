from django.contrib import admin

from .models import Medicine, MyUser

admin.site.register(MyUser)
admin.site.register(Medicine)