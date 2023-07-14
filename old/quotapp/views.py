from django.shortcuts import render, redirect
from django.views import View
from django.urls import reverse_lazy
from django.contrib import messages

from django.contrib.auth import login, authenticate, logout
from django.contrib.auth.forms import AuthenticationForm

from .forms import SignUpForm
# from .models import

class HomeView(View):
    template_name = "quotapp/home.html"

    def get(self, request):
        ctx = {}
        return render(request, self.template_name, ctx)

class LoginView(View):
    template_name = "registration/login.html"
    success_url = reverse_lazy("quotapp:quote")
    unsuccess_url = reverse_lazy("quotapp:login")

    def get(self, request):
        if request.user.is_anonymous:
            form = AuthenticationForm()
            ctx = { "form":form }
            return render(request, self.template_name, ctx)
        else:
            return redirect(self.success_url)

    def post(self, request):
        form = AuthenticationForm(request, data=request.POST)
        if form.is_valid():
            username = form.cleaned_data.get("username")
            password = form.cleaned_data.get("password")
            user = authenticate(username=username, password=password)
            if user is not None:
                login(request, user)
                return redirect(self.success_url)
        return redirect(self.unsuccess_url)

class SignupView(View):
    template_name = "registration/signup.html"
    success_url = reverse_lazy("quotapp:quote")
    unsuccess_url = reverse_lazy("quotapp:signup")

    def get(self, request):
        if request.user.is_anonymous:
            form = SignUpForm()
            ctx = { "form" : form }
            return render(request, self.template_name, ctx)
        else:
            return redirect(self.success_url)

    def post(self, request):
        if request.user.is_anonymous:
            form = SignUpForm(request.POST)
            if form.is_valid():
                username = form.cleaned_data.get('username')
                password = form.cleaned_data.get('password1')
                form.save()
                user = authenticate(username=username, password=password)
                if user is not None:
                    login(request, user)
                    return redirect(self.success_url)
            else:
                for field, errors in form.errors.items():
                    for error in errors:
                        messages.error(request, error)
        return redirect(self.unsuccess_url)



############################            Quote             ##############################
class QuoteView(View):
    template_name = "quotapp/quote/quote.html"
    unsuccess_url = reverse_lazy("quotapp:home")

    def get(self, request):
        if request.user.is_authenticated:
            ctx = {}
            return render(request, self.template_name, ctx)
        else:
            return redirect(self.unsuccess_url)



##########
class ButtonView(View):
    url1 = reverse_lazy("quotapp:quote")

    def get(self, request, dest):
        if dest == "Quote":
            return redirect(self.url1)




