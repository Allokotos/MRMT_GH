import 'package:flutter/material.dart';
import 'package:flutter_lw5/classes/WorkerCardData.dart';
import 'WorkerCard.dart';

class ListViewCardsBuilder extends StatefulWidget {
  ListViewCardsBuilder({super.key, count, required this.cardData});

  late List<WorkerCardData> cardData;

  @override
  State<StatefulWidget> createState() => ListViewCardBuilderState();
}

class ListViewCardBuilderState extends State<ListViewCardsBuilder> {
  @override
  Widget build(BuildContext context) {
    return ListView.builder(
        padding: const EdgeInsets.all(8.0),
        physics: const BouncingScrollPhysics(),
        itemCount: widget.cardData.length,
        itemBuilder: ((context, index) {
          return WorkerCard(cardData: widget.cardData[index]);
        }));
  }
}
