# Generated by Django 3.2.9 on 2021-11-05 12:19

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0005_alter_user_username'),
    ]

    operations = [
        migrations.AlterField(
            model_name='user',
            name='emergency_name',
            field=models.CharField(max_length=200, verbose_name='emergency contact name'),
        ),
    ]