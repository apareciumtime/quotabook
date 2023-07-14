from django.contrib import admin
from django.urls import path, include

import os
from django.views.static import serve

urlpatterns = [
    path('', include('quotapp.urls')),
    path('admin/', admin.site.urls),
    path('accounts/', include('django.contrib.auth.urls')),
    # path('accounts/', include('allauth.urls')),
]

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
urlpatterns += [
    path('favicon.ico', serve, {
            'path': 'favicon.ico',
            'document_root': os.path.join(BASE_DIR, 'src/static'),
        }
    ),
]