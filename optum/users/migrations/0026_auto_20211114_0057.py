# Generated by Django 3.2.9 on 2021-11-13 19:27

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0025_auto_20211114_0050'),
    ]

    operations = [
        migrations.AlterField(
            model_name='medicine',
            name='exp_date',
            field=models.DateField(null=True, verbose_name='expiry date'),
        ),
        migrations.AlterField(
            model_name='medicine',
            name='man_date',
            field=models.DateField(null=True, verbose_name='manufacturing date'),
        ),
    ]