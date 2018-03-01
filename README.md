# Harvest plugin for OctoberCMS

This plugin adds the 'harvest' form field type.

### Using the form field

This form field uses the 'Harvest Widget'.

Config | Harvest Widget Parameter
--- | ---
taskKey | external_item_id
taskName | external_item_name

Define the models column to use for the **external_item_id** and the **external_item_name**.

``` yaml
harvest:
    label: Timemanager
    type: harvest
    span: auto
    context:
        - update
        - preview
    taskKey: id
    taskName: name
```

### Future
I've planned a few more features which will be added soon.

### More information

For more information, please take a look at the Harvest documentation.

[Harvest Widget Documentation](https://github.com/harvesthq/platform/blob/master/widget.md)
