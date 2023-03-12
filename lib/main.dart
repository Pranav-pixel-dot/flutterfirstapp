import 'package:flutter/material.dart';
import 'package:tutorial1/pages/home_page.dart';
import 'package:tutorial1/pages/login_page.dart';

void main() {
  runApp(const Myapp());
}

class Myapp extends StatelessWidget {
  const Myapp({super.key});

  @override
  Widget build(BuildContext context) {
    // ignore: prefer_const_constructors
    return MaterialApp(
      // ignore: prefer_const_constructors
      
      themeMode: ThemeMode.dark,
      theme: ThemeData(primarySwatch: Colors.red),
      darkTheme: ThemeData(primarySwatch: Colors.green),
      initialRoute: "/home",
      routes: {
        "/":(context) => const LoginPage(),
        "/home":(context) => const HomePage(),
        "/login":(context) => const LoginPage()
      },
    );
  }
}
