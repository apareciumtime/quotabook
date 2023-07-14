from django.urls import path
from . import views

app_name="quotapp"
urlpatterns = [
    path('', views.HomeView.as_view(), name="home"),
    path('login/', views.LoginView.as_view(), name="login"),
    path('signup/', views.SignupView.as_view(), name="signup"),

    # path('<str:dest>/', views.ButtonView.as_view(), name='button_view'),

    #####################      Quote       ########################
    path('quote/', views.QuoteView.as_view(), name="quote"),
    # path('/create/quote', views.CreateQuoteView.as_view(), name="create_quote"),
    # path('/update/quote', views.UpdateQuoteView.as_view(), name="update_quote"),
    # path('/delete/quote', views.DeleteQuoteView.as_view(), name="delete_quote"),

]
