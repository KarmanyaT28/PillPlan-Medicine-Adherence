# Generated by Django 3.2.6 on 2021-11-04 06:43

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='user',
            name='username',
            field=models.CharField(default='UserName', max_length=60, unique=True, verbose_name='Username'),
        ),
    ]
