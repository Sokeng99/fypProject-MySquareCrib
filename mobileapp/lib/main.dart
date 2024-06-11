import 'package:flutter/material.dart';
import 'app/airbnb_clone.dart';
import './pages/auth/login.dart';
import './pages/auth/register.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: LoginPage(),
    );
  }
}
