# Generated by Django 4.0.6 on 2023-07-02 14:21

from django.db import migrations, models
import quotapp.models


class Migration(migrations.Migration):

    dependencies = [
        ('quotapp', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='buser',
            name='password',
            field=models.CharField(help_text='Enter a strong password.', max_length=128, verbose_name='password'),
        ),
    ]
