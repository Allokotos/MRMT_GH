import 'package:flutter/material.dart';
import 'package:flutter_lw5/widgets/WorkerCard.dart';
import 'widgets/ListViewCardBuilder.dart';
import 'classes/WorkerCardData.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'NO WAY',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        primarySwatch: Colors.grey,
      ),
      home: const MyHomePage(title: 'Worker ListView'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({super.key, required this.title});
  final String title;

  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  final List<WorkerCardData> cardData = <WorkerCardData>[
    WorkerCardData(
        image: Image.asset('assets/images/100.png'),
        name: 'Joe',
        job: 'Finance'),
    WorkerCardData(
        image: Image.asset('assets/images/101.png'),
        name: 'Kate',
        job: 'Clerk'),
    WorkerCardData(
        image: Image.asset('assets/images/102.png'),
        name: 'Barbara',
        job: 'Chief'),
    WorkerCardData(
        image: Image.asset('assets/images/104.png'), name: 'John', job: 'Cook'),
    WorkerCardData(
        image: Image.asset('assets/images/105.png'),
        name: 'Isaac',
        job: 'IT-specialist'),
    WorkerCardData(
        image: Image.asset('assets/images/108.png'),
        name: 'Kevin',
        job: 'Head'),
  ];

  late ListViewCardsBuilder _builder;

  TextEditingController searchController = TextEditingController();
  @override
  void initState() {
    setState(() {
      _builder = ListViewCardsBuilder(cardData: cardData);
    });
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.black,
        title: TextFormField(
            validator: (value) {
              if (value == null || value.isEmpty) {
                return "";
              }
              return null;
            },
            style: const TextStyle(color: Colors.white),
            controller: searchController,
            decoration: InputDecoration(
                hintStyle: const TextStyle(color: Colors.white),
                labelStyle: const TextStyle(color: Colors.white70),
                labelText: "Job:",
                hintText: "Type to search",
                prefixIcon: const Icon(Icons.search),
                suffix: ElevatedButton(
                  style: ElevatedButton.styleFrom(
                      shape: RoundedRectangleBorder(
                        borderRadius: BorderRadius.circular(16),
                      ),
                      foregroundColor: Colors.white,
                      backgroundColor: Colors.blue[800]),
                  onPressed: () {
                    String query = searchController.text;

                    List<WorkerCardData> dummySearchList =
                        List<WorkerCardData>.from(cardData);
                    if (query.isNotEmpty) {
                      List<WorkerCardData> dummyListData =
                          List<WorkerCardData>.empty(growable: true);
                      dummySearchList.forEach((element) {
                        if (element.job
                                .toLowerCase()
                                .contains(query.toLowerCase()) ||
                            element.name.toLowerCase().contains(query)) {
                          dummyListData.add(element);
                        }
                      });
                      setState(() {
                        _builder =
                            ListViewCardsBuilder(cardData: dummyListData);
                      });
                      return;
                    } else {
                      setState(() {
                        _builder = ListViewCardsBuilder(cardData: cardData);
                      });
                    }
                  },
                  child: const Text("Search"),
                ))),
      ),
      body: Center(child: _builder),
    );
  }
}
