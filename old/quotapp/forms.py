from django import forms
from django.forms import ModelForm
# from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from .models import BUser

class SignUpForm(UserCreationForm):
    class Meta:
        model = BUser
        fields = ('username', 'email', 'password1', 'password2')




