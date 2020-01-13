#include <iostream>
#include <vector>
#include <algorithm>

int equalizeArray(std::vector<int> arr)
{

  std::array<int, 100> a{};

  for (const auto &e : arr)
    ++a[e];

  return arr.size() - *std::max_element(a.begin(), a.end());
}